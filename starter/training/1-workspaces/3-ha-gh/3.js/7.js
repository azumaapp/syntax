// api 호출 전 준비 : 크롬에 웹스토어 검색 - json viewer 검색 - 설치 - json타입을 보기 쉽게 된다.
// vscode 확장설치 - tabnine ai 설치

// api : 백엔드개발자가 만든, 데이터베이스에서 추출된 정보를 표시하는 앱
// api doc : 위의 설명서

// api 주소 : https://yts.mx/api/v2/list_movies.json?sort_by=rating

let url = 'https://yts.mx/api/v2/list_movies.json?sort_by=rating'
let movies = []

function getMovie (item) {
    fetch (item)
        .then(response => {
            return response.json()
        })
        .then(json => {
            for(let i = 0; i < json.data.movies.length; i++) {
                movies.push(json.data.movies[i])
            }
        })
}

getMovie(url)
console.log('movies: ', movies);
