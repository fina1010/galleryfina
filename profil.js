

$.getJSON(window.location.origin ='/dataprofile', function(res){
    console.log(res)
    $('#nama').html(res.data.nama_lengkap)
    $('#biomy').html(res.data.bio)
    $('#alamatmy').html(res.data.alamat)
    $('#fotoprofile').prop('src','/img/'+res.data.pictures )
    $('#profile').prop('src','/img/'+res.data.pictures )
    $('#myprofil').prop('src','/img/'+res.data.pictures )
})
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
                    var hasilPencarian = x.likefotos.filter(function (hasil) {
                        return hasil.user_id === e.id
                    })
                    if(hasilPencarian.length <= 0){
                        userlike = 0;
                    } else{
                        userlike = hasilPencarian[0].user_id;
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
                        useractive: e.id,
                        username: x.nama_lengkap
                    }
                    dataExplore.push(datanya)
                    console.log(userlike)
                    console.log(e.id)
                })
                getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown ){

        }
    })
}
const getExplore =()=>{
    $('#exploredata').html('')
    dataExplore.map((x, i)=>{
        $('#exploredata').append(
            `
            <div class="group mx-auto rounded-lg bg-white w-[285px] h-[380px] shadow-2xl">
            <!-- Dropdown menu -->
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                            type="button" onclick="toggleContent1(${i})">
                                            <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                             </svg>
                                        </button>
                                        <div id="dropdownDots${i}" class="z-10 hidden  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600" style="position:absolute; center:0">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                <li>
                                                    <button class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  ">
                                                     <a href="/editpost/${x.id}">Edit</a>
                                                    </button>
                                                </li>
                                                <li>
                                                <button type="button" data-id="${x.id}" class="block btn-delete-foto px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        Hapus
                                                    </button>
                                                </li>
                                            </ul>
                                    </div>
            <a href="/explore-detail/${x.id}">
            <div class="w-[265px] h-[222px] mx-auto overflow-hidden rounded-t-lg bg-cover ">
              <img src="/img/${x.foto}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center transition duration-300 ease-in-out hover:scale-110">
            </div>
            
            </a>
            <div class="ml-2 h-[50px] ">
            <h3 class="mt-4 text-sm text-gray-700"> ${x.judul}</h3>
            <h4 class=" text-sm text-gray-700"> ${new Date(x.tanggal).toLocaleDateString("id") }</h4> 
            </div>
           
            <div class="w-[285px] border-t-2 mt-2 bg-white">
    <div class="inline-flex items-center px-4 py-2 text-gray-800 text-sm font-medium rounded-md ml-14 mt-sm bg-gray-200 mt-2 mb-3 w-[80px]">
    <span id="reload" class="ml-2 text-lg bi ${x.idUserLike === x.useractive ? 'bi-hand-thumbs-up-fill text-blue-600': 'bi-hand-thumbs-up'} " onclick="likes(this, ${x.id})"></span>
          <p class="ml-1 mt-2" id="demo">${x.jml_like}<p>
    </div>
    <div class="inline-flex items-center px-4 py-2 text-gray-800  text-sm font-medium rounded-md ml-3 mt-sm bg-gray-200 w-[80px] ">
    <span class="ml-2 text-center text-lg bi bi-chat-left-text"></span>
          <p class="ml-1 mt-1">${x.jml_comment}<p>
    </div>
   
    </div>
          </div>

            `
        )
    })
}
//toggle
function toggleContent1(index) {
    var dropdown = document.getElementById('dropdownDots' + index);
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block';
    } else {
        dropdown.style.display = 'none';
    }
}
function likes(txt, id) {
    $.ajax({
        url: window.location.origin +'/likefotos',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },
        success: function(res) {
            location.reload(true)
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('gagal')
        }
    })
}

//delete foto
$(document).on('click', '.btn-delete-foto', function() {
    console.log('Tombol Hapus Diklik');
    var id = $(this).data('id');
    if (confirm('Apakah Anda yakin ingin menghapus postingan ini?')) {
        deletefoto(id);
    }
// ... fungsi deletefoto dan lainnya
    function deletefoto(id){
        $.ajax({
            url: '/deletefoto/' + id,
            dataType: "JSON",
            type: "DELETE",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), 
                id: id
            },
            success: function(res){
                if(res.success) {
                    // Hapus elemen postingan dari tampilan
                    $('#elemen-foto-' + id).remove(); 
                    location.reload()
                } else {
                    alert('Gagal menghapus postingan');
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('Gagal menghapus postingan');
            }
        });
    }
    
    });