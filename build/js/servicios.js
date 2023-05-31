const servicios = [
    {
        id: 1,
        nombre: "Mantenimiento Industrial",
        imgw: "/build/img/mind.svg",
        w: 473,
        h: 633,
        desc: "Remodelacion de Instalaciones",
    },
    {
        id: 2,
        nombre: "Pavimentaciones",
        imgw: "/build/img/pavi.svg",
        w: 473,
        h: 600,
        desc: "Obra publica",
    }
    ,
    {
        id: 3,
        nombre: "Construccion de Edificios",
        imgw: "/build/img/cedi.svg",
        w: 770,
        h: 769,
        desc: "Publico y Privado",
    },
    {
        id: 4,
        nombre: "Drenajes Sanitarios",
        imgw: "/build/img/dsan.svg",
        w: 473,
        h: 742,
        desc: "Publicos y Privados",
    },
    {
        id: 5,
        nombre: "Estructuras Metalicas",
        imgw: "/build/img/emet.svg",
        w: 474,
        h: 742,
        desc: "Industriales, Publicas y Privadas",
    },
    {
        id: 6,
        nombre: "Impermeabilización y Pintura",
        imgw: "/build/img/ipin.svg",
        w: 473,
        h: 742,
        desc: "Publica y Privada",
    },
    {
        id: 7,
        nombre: "Obra Civil y Albañileria",
        imgw: "/build/img/ociv.svg",
        w: 473,
        h: 742,
        desc: "Publica y Privada",
    },
    {
        id: 8,
        nombre: "Acabados",
        imgw: "/build/img/acab.svg",
        w: 286,
        h: 418,
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
        <source srcset="${servicios.imgw}" type="image/svg">
        <img src="${servicios.imgw}" width="${servicios.w}" height=${servicios.h}" alt="Imagen de ${servicios.nombre}">
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