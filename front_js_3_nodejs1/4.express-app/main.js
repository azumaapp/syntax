const express = require('express')
const app = express()
const port = 3000
const path = require('path')
const template = require('./lib/template.js')
const fs = require('fs')
const qs = require('querystring');
const sanitizeHtml = require('sanitize-html')

app.get('/', (request, response) => { // ★ (A) => { B } 방식은 function(A) { return B } 와 의미가 같다.
  fs.readdir('./data', function(error, filelist){
    var title = 'Welcome';
    var description = 'Hello, Node.js';
    var list = template.list(filelist);
    var html = template.HTML(title, list,
      `<h2>${title}</h2>${description}`,
      `<a href="/create">create</a>`
    );
    response.send(html);
  });
})

app.get('/page/:pageId', function(request, response) {
  fs.readdir('./data', function(error, filelist) {
    // 1. queryData.id를 request.params.pageId로 변경
    // 2. 상단에 sanitizeHtml, path를 require해줌
    // 3. lib 폴더의 template.js에서 주소체계를 queryString체계에서 semantic url 형식으로 바꿔줌
    // 4. pm2 start main.js --watch로 실행 (* 이후 끌 때 pm2 kill)
    var filteredId = path.parse(request.params.pageId).base;
    fs.readFile(`data/${filteredId}`, 'utf8', function(err, description){
      var title = request.params.pageId;
      var sanitizedTitle = sanitizeHtml(title);
      var sanitizedDescription = sanitizeHtml(description, {
        allowedTags:['h1']
      });
      var list = template.list(filelist);
      var html = template.HTML(sanitizedTitle, list,
        `<h2>${sanitizedTitle}</h2>${sanitizedDescription}`,
        ` <a href="/create">create</a>
          <a href="/update/${sanitizedTitle}">update</a>
          <form action="/delete" method="post">
            <input type="hidden" name="id" value="${sanitizedTitle}">
            <input type="submit" value="delete">
          </form>`
      );
      response.send(html);
    });
  });
})

// get 방식 create
app.get('/create', function(request, response) {
  fs.readdir('./data', function(error, filelist){
    var title = 'WEB - create';
    var list = template.list(filelist);
    var html = template.HTML(title, list, `
      <form action="/create" method="post">
        <p><input type="text" name="title" placeholder="title"></p>
        <p>
          <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
      </form>
    `, '');
    response.send(html);
  });
})

// post 방식 create
// 1. create_process 이름을 create로 변경
// 2. 상단에 qs를 require해줌
// 3. Create 해보기
app.post('/create', function(request, response) {
  var body = '';
  request.on('data', function(data){
      body = body + data;
  });
  request.on('end', function(){
      var post = qs.parse(body);
      var title = post.title;
      var description = post.description;
      fs.writeFile(`data/${title}`, description, 'utf8', function(err){
        response.writeHead(302, {Location: `/?id=${title}`});
        response.end();
      })
  });  
})

// get 방식 update
// 1. '/'을 라우팅한 부분에서 a href 이후 update?id= 부분을 update/로, 주소체계를 semantic url 형식으로 바꿔줌
// 2. 아래 코드에서 queryData.id를 request.params.pageId로 변경
app.get('/update/:pageId', function(request, response) {
  fs.readdir('./data', function(error, filelist){
    var filteredId = path.parse(request.params.pageId).base;
    fs.readFile(`data/${filteredId}`, 'utf8', function(err, description){
      var title = request.params.pageId;
      var list = template.list(filelist);
      var html = template.HTML(title, list,
        `
        <form action="/update" method="post">
          <input type="hidden" name="id" value="${title}">
          <p><input type="text" name="title" placeholder="title" value="${title}"></p>
          <p>
            <textarea name="description" placeholder="description">${description}</textarea>
          </p>
          <p>
            <input type="submit">
          </p>
        </form>
        `,
        `<a href="/create">create</a> <a href="/update?id=${title}">update</a>`
      );
      response.send(html);
    });
  });
})

// post 방식 update
// 1. update_process 이름을 update로 변경
// 2. 실행해서 업데이트 해보기
app.post('/update', function(request, response) {
  var body = '';
  request.on('data', function(data){
      body = body + data;
  });
  request.on('end', function(){
      var post = qs.parse(body);
      var id = post.id;
      var title = post.title;
      var description = post.description;
      fs.rename(`data/${id}`, `data/${title}`, function(error){
        fs.writeFile(`data/${title}`, description, 'utf8', function(err){
          response.redirect(`/?id=${title}`);
        })
      });
  });
})

// post 방식 delete
// 1. delete_process 이름을 delete로 변경
// 2. '/' 라우팅에서 delete 부분의 href 수정 (/을 넣어야 최상위로 감)
// 3. 아래 코드 response.writeHead 이하 리다이렉션 부분 수정 => response.redirect('/');
// 4. 위 리다이렉션을 update post에도 적용
// 4. 실행해서 삭제 해보기
app.post('/delete', function(request, response) {
  var body = '';
  request.on('data', function(data){
      body = body + data;
  });
  request.on('end', function(){
      var post = qs.parse(body);
      var id = post.id;
      var filteredId = path.parse(id).base;
      fs.unlink(`data/${filteredId}`, function(error){
        response.redirect('/');
      })
  });
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

// var app = http.createServer(function(request,response){
//     var _url = request.url;
//     var queryData = url.parse(_url, true).query;
//     var pathname = url.parse(_url, true).pathname;
//     if(pathname === '/'){
//       if(queryData.id === undefined){
//         });
//       } else {
//       }
//     } else if(pathname === '/create'){
//     } else if(pathname === '/create_process'){
//     } else if(pathname === '/update'){
//     } else if(pathname === '/update_process'){
//     } else if(pathname === '/delete_process'){
//     } else {
//       response.writeHead(404);
//       response.end('Not found');
//     }
// });
// app.listen(3000);
