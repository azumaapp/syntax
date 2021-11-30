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
            console.log(data)
            movies.push(data)
        })
        .catch(err => {
            // error 처리
            console.log('Fetch Error', err);
        });
}

getMovie(url)
console.log('결과값:', movies)

// TODO : movies의 값을 토대로 DOM을 변경해본다.
// 템플릿 주소 : https://www.templateshub.net/templates/Entertainment에서 4번째 https://www.templateshub.net/template/Film-Review-Movie-Database 에 들어가서 다운로드