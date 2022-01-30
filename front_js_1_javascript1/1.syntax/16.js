// API란? : https://brunch.co.kr/@operator/65

// 사용할 API 주소(예제) : 영화 리뷰 사이트의 API를 호출한다.
// API GET : https://yts.mx/api/v2/list_movies.json
// API GET SORT BY : https://yts.mx/api/v2/list_movies.json?sort_by=rating
// API 튜토리얼 : https://yts.mx/api

// API 호출 명령어 참조 : https://hogni.tistory.com/142

let url = "https://yts.mx/api/v2/list_movies.json?sort_by=rating"
let movies = []
let movieListArr = []

function getMovie(url) {
    fetch(url)
        .then(res => {
            // response 처리
            console.log(res)
            // 응답을 JSON 형태로 파싱
            return res.json()
        })
        .then(data => {
            // json 출력
            // console.log(data) // 들어오는지 확인 1
            movies.push(data)
            render(movies) // 확인 2까지 한뒤 주석풀기
        })
        .catch(err => {
            // error 처리
            console.log('Fetch Error', err);
        });
}

getMovie(url) // 여기서 전역변수 movies의 값을 갱신한다.
// console.log('결과값:', movies) // 들어오는지 확인 2

// 자료를 토대로 HTML을 만들어낸다.
function render(movies) {
    console.log('movies:', movies) // 들어오는지 확인 3
    console.log('movies[0].data.movies', movies[0].data.movies) // 들어오는지 확인 4 (더 자세히 보기)

    movieListArr = movies[0].data.movies
    for (let i = 0; i < movieListArr.length; i++) {
        createMovieList(movieListArr[i])
    }

    // ↓↓↓ movies[0].data.movies 배열 데이터의 인덱스 중 하나의 밸류를 복사해서 보면서 작업한다. ↓↓↓

    // background_image: "https://yts.mx/assets/images/movies/jai_bhim_2021/background.jpg"
    // background_image_original: "https://yts.mx/assets/images/movies/jai_bhim_2021/background.jpg"
    // date_uploaded: "2021-11-03 16:12:36"
    // date_uploaded_unix: 1635952356
    // description_full: "When a tribal man is arrested for a case of alleged theft, his wife turns to a human-rights lawyer to help bring justice."
    // genres: (2) ['Crime', 'Drama']
    // id: 37384
    // imdb_code: "tt15097216"
    // language: "ta"
    // large_cover_image: "https://yts.mx/assets/images/movies/jai_bhim_2021/large-cover.jpg"
    // medium_cover_image: "https://yts.mx/assets/images/movies/jai_bhim_2021/medium-cover.jpg"
    // mpa_rating: ""
    // rating: 9.5
    // runtime: 164
    // slug: "jai-bhim-2021"
    // small_cover_image: "https://yts.mx/assets/images/movies/jai_bhim_2021/small-cover.jpg"
    // state: "ok"
    // summary: "When a tribal man is arrested for a case of alleged theft, his wife turns to a human-rights lawyer to help bring justice."
    // synopsis: "When a tribal man is arrested for a case of alleged theft, his wife turns to a human-rights lawyer to help bring justice."
    // title: "Jai Bhim"
    // title_english: "Jai Bhim"
    // title_long: "Jai Bhim (2021)"
    // torrents: (2) [{…}, {…}]
    // url: "https://yts.mx/movies/jai-bhim-2021"
    // year: 2021
    // yt_trailer_code: "ElXnVVDl8cA"
}

/**
 * DOM 객체를 생성한다. 
 * 연습이므로, 타이틀 (title), 이미지 (background_image) 밸류만 사용해서 해보도록 하겠다.
 * 생성방법: 12.js의 DOM 객체 생성편 참조
 * @param {Object} movieObj 영화 한개의 객체 정보
 */
function createMovieList(movieObj) {
    // <타이틀>
    let title = document.createElement("div")
    title.innerHTML = movieObj.title // 교육받을 내용
    title.setAttribute("class","movieTitle") // 부여받을 정체성, 소속(identity, class등)
    // 스타일 꾸미기 : 사실 이 아래 부분은 쓰지말고, css에 해당 내용들을 담아서 사용하는 것이 더 좋다. (14.css 참조)
    // title.style.color="white"
    // title.style.backgroundColor="gray"
    // title.style.marginTop="10px"
    // title.style.width="300px"

    // <이미지>
    let image = document.createElement("img")
    image.src = movieObj.background_image // 교육받을 내용
    image.setAttribute("class","movieImage") // 부여받을 정체성, 소속(identity, class등)
    // image.style.width="300px" // 스타일 꾸미기

    // 모두 부모 태그에 갖다 붙이기
    let parent = document.querySelector("#movieList")
    parent.appendChild(title)
    parent.appendChild(image)
}

// TODO: 해당 API에서 더 많은 변수를 꺼내어 자신의 느낌대로 HTML, CSS를 짜고 영화리뷰사이트를 간단히 만들어봅시다.
// TODO: 연습문제 폴더에 있는 영화리뷰 사이트 템플릿에 만든 내용을 넣어 완성해봅시다.