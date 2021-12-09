function clicked1() {
    // 초기 데이터
    let array1 = [1, 3, 3, 4, 4, 5]
    let array2 = [ 
        { name: 'apple', count: 2 },
        { name: 'banana', count: 7 },
        { name: 'orange', count: 3 },
    ]

    // for : 기존 for문
    // 입력값을 받아서, 해당 값이 있는 지를 알려준다.
    let search1 = Number(prompt('어떤 숫자? '))    
    for(let i = 0; i < array1.length; i++) {
        if(search1 === array1[i]){
            console.log(array1[i]+'가 있습니다.')
        } else { console.log('없습니다.') }
    }

    // '과일 종류' 입력값을 받아서, 해당 과일이 몇개 있는 지를 알려준다.
    let search2 = prompt('어떤 과일? ')
    for(let i =0; i < array2.length; i++) {
        if(search2 === array2[i].name) {
            console.log(array2[i].name+'이 '+array2[i].count+'개 있습니다.')
        } else { console.log('없습니다.') }
    }

    // indexOf : 조건에 해당하는 값이 어디에 있는지를 인덱스로 표시 (없을 때는 -1, 있으면 해당 인덱스.)
    // JSON 형태에서는 쓸수가 없다.
    search1 = Number(prompt('어떤 숫자? '))
    console.log(array1[array1.indexOf(search1)]+'가 있습니다.')

    // filter : 조건에 해당하는 값이 몇개 있는지를 검색해서, 배열에 담아서 표시한다.
    // JSON 형태에서 특정값 한개만 걸러낼 때 유용하다.
    search1 = Number(prompt('어떤 숫자? '))
    let newArray1 = array1.filter(function(item) { return item === search1 }) // newArray1 === [ 3, 3 ]
    if(newArray1.length > 0) { console.log(newArray1.length+'개 있습니다.') }
    search2 = prompt('어떤 과일? ')
    let newArray2 = array2.filter(function(item) { return item.name === search2 }) // newArray2 === [ { name: 'apple', count: 2 } ]
    console.log(newArray2[0].name+'는 '+newArray2[0].count+'개 있습니다.')

    // forEach : 밸류값, 인덱스값을 동시에 꺼낸다. return 값을 취할 수 없다.
    search1 = Number(prompt('어떤 숫자? '))
    array1.forEach(function(value, index) {
        if (search1 === value) {
            console.log(String(index+1)+'번째에 '+value+'가 있습니다.')
        }
    })
    search2 = prompt('어떤 과일? ')
    array2.forEach(function(value, index) {
        if (search2 === value.name) {
            console.log(String(index+1)+'번째에 '+ value.name+'가 '+value.count+'개 있습니다.')
        }
    })

    // map : 밸류값, 인덱스값을 동시에 꺼낸다. return 값을 취할 수 있다.
    search1 = Number(prompt('어떤 숫자? '))
    array1.map(function(value, index) {
        if (search1 === value) {
            console.log(String(index+1)+'번째에 '+value+'가 있습니다.')
        }
    })
    search2 = prompt('어떤 과일? ')
    array2.map(function(value, index) {
        if (search2 === value.name) {
            console.log(String(index+1)+'번째에 '+ value.name+'가 '+value.count+'개 있습니다.')
        }
    })
    // map를 쓰는 경우 : return이 필요한 경우, 인풋값(=array1, array2)과 동일한 배열을 출력한다.
    let a = array1.map(function(value, index) { if(value === 3) { return value }})
    let b = array2.map(function(value, index) { if(value.name === 'orange') { return value }})
    console.log(a)
    console.log(b)

    // reduce를 쓰는 경우 : 인자를 어떻게 주냐에 따라 용도가 달라진다.(인자가 a, b, c, d라면, a: 이전값, b: 현재값, c: 인덱스, d: 배열)
    array1.reduce(function(a, b, c, d) { console.log('이전값:', a); console.log('현재값:', b); console.log('인덱스:', c); console.log('배열:', d); })
    array2.reduce(function(a, b, c, d) { console.log('이전값:', a); console.log('현재값:', b); console.log('인덱스:', c); console.log('배열:', d); })


    // forEach를 쓰는 경우 : return이 필요없는 경우    
    var arr = ['가','나','다','라']; 
    arr.forEach(function(item,index,arr2){ console.log(item,index,arr2[index+1]); }) 
    // 첫번쨰 인수는 배열의 각각의 item 
    // 두번쨰 인수는 배열의 index 
    // 세번째 인수는 배열 그자체
}

