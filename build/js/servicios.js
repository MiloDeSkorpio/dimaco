const servicios = [
    {
        id: 1,
        nombre: "Mantenimiento Industrial",
        imgw: "/build/img/mind.webp",
        imgj: "/build/img/mind.jpg",
        desc: "Remodelacion de Instalaciones",
    },
    {
        id: 2,
        nombre: "Pavimentaciones",
        imgw: "/build/img/pavi.webp",
        imgj: "/build/img/pavi.jpg",
        desc: "Obra publica",
    }
    ,
    {
        id: 3,
        nombre: "Construccion de Edificios",
        imgw: "/build/img/cedi.webp",
        imgj: "/build/img/cedi.jpg",
        desc: "Publico y Privado",
    },
    {
        id: 4,
        nombre: "Drenajes Sanitarios",
        imgw: "/build/img/dsan.webp",
        imgj: "/build/img/dsan.jpg",
        desc: "Publicos y Privados",
    },
    {
        id: 5,
        nombre: "Estructuras Metalicas",
        imgw: "/build/img/emet.webp",
        imgj: "/build/img/emet.jpg",
        desc: "Industriales, Publicas y Privadas",
    },
    {
        id: 6,
        nombre: "Impermeabilización y Pintura",
        imgw: "/build/img/ipin.webp",
        imgj: "/build/img/ipin.jpg",
        desc: "Publica y Privada",
    },
    {
        id: 7,
        nombre: "Obra Civil y Albañileria",
        imgw: "/build/img/ociv.webp",
        imgj: "/build/img/ociv.jpg",
        desc: "Publica y Privada",
    },
    {
        id: 8,
        nombre: "Acabados",
        imgw: "/build/img/acab.webp",
        imgj: "/build/img/acab.jpg",
        desc: "Civiles e Industriales",
    }
]

const contServicios = document.getElementById("servicios");

servicios.forEach((servicios) =>  {
    let servicio = document.createElement("div");
    servicio.classList.add("servicio");
    servicio.classList.add("glass");
    servicio.innerHTML = `
    <div class="contenido">
    <div class="img_service">
    <picture>
        <source srcset="${servicios.imgw}" type="image/webp">
        <source srcset="${servicios.imgj}" type="image/jpg">
        <img src="${servicios.imgj}" alt="Imagen de ${servicios.nombre}">
    </picture>
    </div><!--.img_service  -->
    <h3 class="titulo">${servicios.nombre}</h3>
    <p>${servicios.desc}</p>
    <div class="btn">
        <a href="contacto.html" class="boton boton_secundario">Cotizar</a>
    </div>
</div> <!--.contenido  -->
    `
    contServicios.append(servicio);
});