import React from 'react'
import Hello from './Hello'
import Wrapper from './Wrapper'

function App () {
    return (
        <Wrapper>
<<<<<<< HEAD
            <Hello name="react" color="red" />
=======
            {/* <Hello name="react" color="red" isSpecial={true} /> */}
            <Hello name="react" color="red" isSpecial={true}/>
>>>>>>> master
            <Hello color="pink" />
        </Wrapper>
    )
}

export default App
