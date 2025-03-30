import React from "react";
import { createRoot } from "react-dom/client";

const App = () => {
    return <h1>Hello from React in WordPress Theme!</h1>;
};

document.addEventListener("DOMContentLoaded", function () {
    const rootElement = document.getElementById("react-root");
    if (rootElement) {
        const root = createRoot(rootElement);
        root.render(<App />);
    }
});
