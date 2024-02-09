// resources/js/Codea.jsx
import React from 'react';
import { createRoot } from 'react-dom/client'

export default function Codea(){
    return(
        <div><h1 style={{textAlign: "center"}}>Act 4. Instalar React en la actividad 3.</h1></div>
    );
}

if(document.getElementById('codeareact')){
    createRoot(document.getElementById('codeareact')).render(<Codea/>)
}