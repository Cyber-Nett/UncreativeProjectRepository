import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
      <div
        style={{
          backgroundImage:
            'url("https://i.pinimg.com/originals/be/ce/1e/bece1e65f2c81678c1af359e6d5d4ac2.jpg")',
        }}
      ></div>
      <button>
        <a href="/UncreativeProjectRepository">Некреативний проект</a>
      </button>
    </>
  );
}

export default App;
