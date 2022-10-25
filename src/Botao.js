import React from "react";

class Botao extends React.Component {
    shot() {
        alert("Voce clicou");
    }
   WebGL2RenderingContext() {
        return (
            <button onClick={this.shot}>Clique</button>
        );
   }
}

