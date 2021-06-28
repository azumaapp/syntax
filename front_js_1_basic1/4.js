function clicked1() {
    // 배열과 반복문

    /*
        반복문은 어레이(배열) 외에는 쓸수가 없다.
        오브젝트에서도 사용할 수 없다. 
        이미 배운바 있을 것이다.
        반복문은 배열의 인덱스를 for로 빙글빙글 돌면서 특정 조건의 밸류값을 취하기 위해서,
        for문과 if문을 섞어서 사용한다.
        이 챕터에서는 이 for 문의 기본사용법을 포함하여, 
        for 대신 사용할 수 있는 보다 고급스러운 문법들도 살펴보겠다.
    */

    let array1 = [1, 3, 3, 4, 4, 5]
    let array2 = [ 
        { name: 'apple', count: 2 },
        { name: 'banana', count: 7 },
        { name: 'orange', count: 3 },
    ]

    // 입력값을 받아서, 해당 값이 있는 지를 알려준다.
    // let search1 = Number(prompt('어떤 숫자? '))    
    // for(let i = 0; i < array1.length; i++) {
    //     if(search1 === array1[i]){
    //         console.log(array1[i]+'가 있습니다.')
    //     } else { console.log('없습니다.') }
    // }

    // '과일 종류' 입력값을 받아서, 해당 과일이 몇개 있는 지를 알려준다.
    // let search2 = prompt('어떤 과일? ')
    // for(let i =0; i < array2.length; i++) {
    //     if(search2 === array2[i].name) {
    //         console.log(array2[i].name+'이 '+array2[i].count+'개 있습니다.')
    //     } else { console.log('없습니다.') }
    // }

    // indexOf : 조건에 해당하는 값이 어디에 있는지를 인덱스로 표시 (없을 때는 -1, 있으면 해당 인덱스.)
    // JSON 형태에서는 쓸수가 없다.
    // search1 = Number(prompt('어떤 숫자? '))
    // console.log(array1[array1.indexOf(search1)]+'가 있습니다.')

    // filter : 조건에 해당하는 값이 몇개 있는지를 검색해서, 배열에 담아서 표시한다.
    // JSON 형태에서 특정값 한개만 걸러낼 때 유용하다.
    // search1 = Number(prompt('어떤 숫자? '))
    // let newArray1 = array1.filter(function(item) { return item === search1 }) // newArray1 === [ 3, 3 ]
    // if(newArray1.length > 0) { console.log(newArray1.length+'개 있습니다.') }
    // search2 = prompt('어떤 과일? ')
    // let newArray2 = array2.filter(function(item) { return item.name === search2 }) // newArray2 === [ { name: 'apple', count: 2 } ]
    // console.log(newArray2[0].name+'는 '+newArray2[0].count+'개 있습니다.')

    // forEach : 밸류값, 인덱스값을 동시에 꺼낸다. return 값을 취할 수 없다.
    // search1 = Number(prompt('어떤 숫자? '))
    // array1.forEach(function(value, index) {
    //     if (search1 === value) {
    //         console.log(String(index+1)+'번째에 '+value+'가 있습니다.')
    //     }
    // })
    // search2 = prompt('어떤 과일? ')
    // array2.forEach(function(value, index) {
    //     if (search2 === value.name) {
    //         console.log(String(index+1)+'번째에 '+ value.name+'가 '+value.count+'개 있습니다.')
    //     }
    // })

    // map : 밸류값, 인덱스값을 동시에 꺼낸다. return 값을 취할 수 있다.
    // search1 = Number(prompt('어떤 숫자? '))
    // array1.map(function(value, index) {
    //     if (search1 === value) {
    //         console.log(String(index+1)+'번째에 '+value+'가 있습니다.')
    //     }
    // })
    // search2 = prompt('어떤 과일? ')
    // array2.map(function(value, index) {
    //     if (search2 === value.name) {
    //         console.log(String(index+1)+'번째에 '+ value.name+'가 '+value.count+'개 있습니다.')
    //     }
    // })

    // forEach를 쓰는 경우 : return이 필요없는 경우    
    // map를 쓰는 경우 : return이 필요한 경우, 인풋값(=array1, array2)과 동일한 배열을 출력한다.
    // let a = array1.map(function(value, index) { if(value === 3) { return value }})
    // let b = array2.map(function(value, index) { if(value.name === 'orange') { return value }})
    // console.log(a)
    // console.log(b)

    // reduce를 쓰는 경우 : 인자를 어떻게 주냐에 따라 용도가 달라진다.(인자가 a, b, c, d라면, a: 이전값, b: 현재값, c: 인덱스, d: 배열)
    // array1.reduce(function(a, b, c, d) { console.log('이전값:', a); console.log('현재값:', b); console.log('인덱스:', c); console.log('배열:', d); })
    // array2.reduce(function(a, b, c, d) { console.log('이전값:', a); console.log('현재값:', b); console.log('인덱스:', c); console.log('배열:', d); })

}

