import React from "react";
import Titulo from "./Titulo";
import Titulo2 from "./Titulo2";
import Tabuada from "./Tabuada";

let n = prompt("Digite um numero", "5");

function App() {
  return (
    <div>
      <Titulo/>
      <Titulo2/>
     <Tabuada numero="3"/>
    </div>
  );
}

export default App;
