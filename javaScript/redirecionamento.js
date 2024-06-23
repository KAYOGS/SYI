import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
import { getDatabase, ref, set, get, child } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

const firebaseConfig = {
    apiKey: "AIzaSyBSU_AIIyEcSwXENfSucyJZqeaSbfNGEfQ",
    authDomain: "projectsyi-51640.firebaseapp.com",
    projectId: "projectsyi-51640",
    storageBucket: "projectsyi-51640.appspot.com",
    messagingSenderId: "633733809952",
    appId: "1:633733809952:web:2cf825d43c233e97357945",
    measurementId: "G-H2SXQPS9CZ"
};

const app = initializeApp(firebaseConfig);
const db = getDatabase(app);
document.getElementsByName("senha").addEventListener('click', function(e){
    set(ref(db, 'user/' + document.getElementsByName("cpf").values),
        {
            cpf: document.getElementsByName("cpf").values,
            nome: document.getElementsByName("nome").values,
            email: document.getElementsByName("email").values,
            data: document.getElementsByName("data").values,
            senha: document.getElementByName("senha").values
        }
    );

    window.alert("Cadastrado com sucesso!")
})

function cadastrese () {
    location.href = '/html/cadastrese.html'
}

function Voltar () {
    location.href = '../index.html'
}

function Voltar1 () {
    location.href = '/index.html'
}
