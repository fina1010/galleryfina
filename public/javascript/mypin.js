// var segmentTerakhir = window.location.href.spldataprofileit("/").pop();
$.getJSON(window.location.origin +'/dataprofile', function(res){
    console.log(res)
    $('#nama').html(res.data.nama_lengkap)
    $('#fotoprofile').prop('src', '/img/'+res.data.picture)
    $('#myprofile').prop('src', '/img/'+res.data.picture)
})

var segmentTerakhir = window.location.href.split('/').pop();
var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() >= $(document).height()){
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate){
    $.ajax({
        url: window.location.origin +'/getdataprofile/'+ '?page='+paginate,
        type: "GET",
        dataType: "JSON",
        success: function(e){
            console.log(e)
            e.datapost.data.map((x)=>{
                var hasilPencarian = x.likefotos.filter(function(hasil){
                    return hasil.id_user === e.id
                })
                if(hasilPencarian.length <= 0){
                    userlike = 0;
                } else {
                    userlike = hasilPencarian[0].id_user;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.url,
                    tanggal: x.created_at,
                    jml_comment: x.comments_count,
                    jml_like: x.likefotos_count,
                    idUserLike: userlike,
                    useractive: e.id
                }
                dataExplore.push(datanya)
                console.log(userlike)
                console.log(e.id)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}

const getExplore =()=>{
    $('#dataprofile').html('')
    dataExplore.map((x, i)=>{
        $('#dataprofile').append(
            `
            <div class="flex mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="/detail/${x.id}">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/img/${x.foto}" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105 rounded-md">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    ${x.judul}
                                </div>
                                <div class="text-xs text-abuabu">
                                ${new Date(x.tanggal).toLocaleDateString("id")}
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-chat-left-text"></span>
                            <small>${x.jml_comment}</small>
                            <span class="bi ${x.idUserLike === x.useractive ? 'bi-heart-fill text-red-800': 'bi-heart'} bi-heart" onclick="likes(this, ${x.id})"></span>
                            <small>${x.jml_like}</small>
                            <a href="/edit/${x.id}" class="bg-green-200 rounded-md"><i class="bi bi-pencil"></i></a>
                            <a href="/hapus/${x.id}" class="bg-red-600 rounded-md"><i class="bi bi-trash3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            `
        )
    })
}

function likes(txt, id){
    $.ajax({
        url: window.location.origin +'/likefotos',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },
        success: function(res){
            console.log(res)
            location.reload()
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal')
        }
    })
}