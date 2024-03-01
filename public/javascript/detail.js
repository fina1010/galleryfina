var segmentTerakhir = window.location.href.split('/').pop();
var paginate = 1;
var loading = false;

var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() === $(document).height()){
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate){
    $.ajax({
        url: window.location.origin +'/getDataExplore'+ '?page='+paginate,
        type: "GET",
        dataType: "JSON",
        success: function(e){
            // console.log(e)
            console.log(paginate)
            e.data.data.map((x)=>{
                var hasilPencarian = x.likefotos.filter(function(hasil){
                    return hasil.id_user === e.idUser
                })
                if(hasilPencarian.length <= 0){
                    userlike=0;
                }else{
                    userlike = hasilPencarian[0].id_user;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto ,
                    foto: x.url,
                    tanggal: x.created_at,
                    jml_comment: x.comments_count,
                    jml_like: x.likefotos_count,
                    idUserLike: userlike,
                    useractive: e.idUser
                }
                dataExplore.push(datanya)
                console.log(userlike)
                console.log(e.idUser)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}

    const getExplore =()=> {
        $('#exploredata').html('')
        dataExplore.map((x, i)=>{
            $('#exploredata').append(
                `
                <div class="flex mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="/detail/${x.id}">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/img/${x.foto}" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    ${x.judul}
                                </div>
                                <div class="text-xs text-abuabu">
                                   ${x.tanggal}
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-chat-left-text"></span>
                            <small>${x.jml_comment}</small>
                            <span class="bi ${x.idUserLike == x.useractive ? 'bi-heart-fill text-red-800': 'bi-heart-'} bi-heart" onclick="likes(this, ${x.id})"></span>
                            <small>${x.jml_like}</small>
                        </div>
                    </div>
                </div>
            </div>
                `
            )
        })
    }
 

$.ajax({
    url: window.location.origin +'/detail/getdatadetail/'+segmentTerakhir,
    type: "GET",
    dataType: "JSON",
    success: function(res){
        console.log(res)
        $('#fotodetail').prop('src', '/img/'+res.dataDetailFoto.url)
        $('#judulfoto').html(res.dataDetailFoto.judul_foto)
        $('#deskripsifoto').html(res.dataDetailFoto.deskripsi_foto)
        $('#namaUser').html(res.dataDetailFoto.user.nama_lengkap)
        $('#namaUser').prop('href','/other-pin/' +res.dataDetailFoto.user.id)
        ambilKomentar()
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('gagal')
    }
})

function ambilKomentar(){
    $.getJSON(window.location.origin +'/detail/getComment/'+segmentTerakhir, function(res){
        console.log(res)
        if(res.data.lenght === 0){
            $('#listkomentar').html('<div>belum ada komentar</div>')
        } else {
            comment= []
            res.data.map((x)=>{
                let datacomentar = {
                    idUser: x.user.id,
                    pengirim: x.user.nama_lengkap,
                    waktu: x.created_at,
                    isikomentar: x.isi_komentar,
                    potopengirim: x.user.picture
                }
                comment.push(datacomentar);
            })
            tampilkankomentar()
        }
    })
}
const tampilkankomentar = ()=>{
    $('#listkomentar').html('')
    comment.map((x, i)=>{
        $('#listkomentar').append(`
                <div class="flex flex-row justify-start mt-4">
                    <div class="w-1/4">
                        <img src="/img/${x.potopengirim}" class="w-8 h-auto w-10 h-10 rounded-full" alt="">
                    </div>
                    <div class="flex flex-col mr-2">
                        <h5 class="text-sm">${x.pengirim}</h5>
                        <small class="text-xs text-abuabu">${new Date(x.waktu).toLocaleDateString("id")}</small>
                    </div>
                <h5 class="text-sm">${x.isikomentar}</h5>
            </div>
        `)
    })
}

function kirimkomentar(){
    $.ajax({
        url: window.location.origin +'/detail/kirimkomentar',
        type: "POST",
        datatype: "JSON",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: segmentTerakhir,
            isi_komentar: $('input[name="textkomentar"]').val()
        },
        success: function(res){
            location.reload()
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal mengirim komentar')
        }

    })
}