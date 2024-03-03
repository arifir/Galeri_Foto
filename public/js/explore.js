let paginate = 1;
let dataExplore = [];

loadMoreData(paginate);
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate) {
    var urlnya = window.location.href.split("?")[1];
    var parameter = new URLSearchParams(urlnya);
    var cariValue = parameter.get('cari')
    if (cariValue == 'null') {
        url = '/getDataExplore' + '?page=' + paginate;
    } else {
        url = '/getDataExplore?cari=' + cariValue + '&page=' + paginate
    }
    $.ajax({
        // url: '/getDataExplore' + '?page=' + paginate,
        url: url,
        type: "GET",
        dataType: "JSON",
        success: function (response) {
            // Mengasumsikan 'data' adalah kunci yang berisi hasil paginasi
            let newData = response.data.data; // Sesuaikan dengan struktur data sebenarnya

            // Menambahkan data baru ke dalam array dataExplore yang sudah ada
            dataExplore = dataExplore.concat(newData);

            // Anda dapat menangani data baru sesuai kebutuhan, misalnya, memperbarui antarmuka pengguna (UI)

            console.log(dataExplore);
            getExplore(); // Panggil fungsi getExplore setelah memuat data baru
        },
        error: function (jqXHR, textStatus, errorThrown) {

        }
    })
}

const getExplore = () => {
    $('#exploreData').html(''); // Perbaiki pemilihan elemen dengan menambahkan '#' sebelum 'exploreData'
    dataExplore.map((x, i) => {
        $('#exploreData').append(
            `<div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <a href="/foto-detail/ ${x.id}"><div class="product__item__pic set-bg">
                        <img src="/foto/${x.url}" class="product__item__pic set-bg">
                        <div id="likeCount" class="comment"><i class="fa fa-heart"></i> ${x.likephoto_count}</div>
                        <div class="view"><i class="fa fa-comments"></i> ${x.comment_count}</div>
                    </div>

                    <div class="product__item__text">
                        <ul>
                            <li>${x.categories.name}</li>
                        </ul>
                        <h5><a href="/foto-detail/{{ $isi->id }}"> ${x.judul_photo}</a></h5>
                    </div>
                    </a>
                </div>
            </div>`
        );
    });
};
