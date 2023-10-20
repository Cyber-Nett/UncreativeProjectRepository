import { useState } from 'react'
import reactLogo from './assets/react.svg'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="App">
      <div>
        <a href="https://vitejs.dev" target="_blank">
          <img src="/vite.svg" className="logo" alt="Vite logo" />
        </a>
        <a href="https://reactjs.org" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Coming Soon!</h1>
      <div className="card">
        <button onClick={() => setCount((count) => count + 1)}>
          клік! {count}
        </button>
        <p>
          Ми надіємося скоро випустити публічну версію!
        </p>
      </div>
      <p className="read-the-docs">
        Find out about me on my <a href='https://github.com/CyberNett'>github page</a>
      </p>
    </div>
  )
}

export default App
