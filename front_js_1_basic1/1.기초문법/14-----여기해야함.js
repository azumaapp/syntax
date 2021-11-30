// API란? : https://brunch.co.kr/@operator/65

// 사용할 API 주소(예제) : 영화 리뷰 사이트의 API를 호출한다.
// API GET : https://yts.mx/api/v2/list_movies.json
// API GET SORT BY : https://yts.mx/api/v2/list_movies.json?sort_by=rating
// API 튜토리얼 : https://yts.mx/api

// API 호출 명령어 참조 : https://hogni.tistory.com/142

let url = "https://yts.mx/api/v2/list_movies.json?sort_by=rating"
let movies = []

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
            // render(movies) // 확인 2까지 한뒤 주석풀기
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



    
    // TODO: movies의 값을 토대로 DOM을 변경 (12.js참조!!!!)

}

