import React from "react";
import ReactDOM from "react-dom";

const App = () => {
    return <h1>Hello from React Framework in WordPress!</h1>;
};

document.addEventListener("DOMContentLoaded", function () {
    const root = document.getElementById("react-root");
    if (root) {
        ReactDOM.render(<App />, root);
    }
});
