//CATEGORIAS ID
let checkbox_marcas = document.getElementById('marcas');
let checkbox_familias = document.getElementById('familias');
let checkbox_aditivos = document.getElementById('aditivos');

//SUBCATEGORIAS ID
let btn_jackson = document.getElementById('btn_jackson');
let btn_yamaha = document.getElementById('btn_yamaha');
let btn_fender = document.getElementById('btn_fender');

let checkbox_instrumentosViento = document.getElementById('checkbox_instrumentosViento');
let checkbox_instrumentosCuerdas = document.getElementById('checkbox_instrumentosCuerdas');
let checkbox_instrumentosPercusion = document.getElementById('checkbox_instrumentosPercusion');

let checkbox_puas = document.getElementById('checkbox_puas');
let checkbox_baquetas = document.getElementById('checkbox_baquetas');
let checkbox_cuerdas = document.getElementById('checkbox_cuerdas');

//CATEGORIA FUNCION PARA MARCAS
checkbox_marcas.addEventListener('change', () => filtros(1));
btn_jackson.addEventListener('change', () => filtros(0));
btn_yamaha.addEventListener('change', () => filtros(0));
btn_fender.addEventListener('change', () => filtros(0));

//CATEGORIA FUNCION PARA FAMILIAS
checkbox_familias.addEventListener('change', () => filtros(2));
checkbox_instrumentosCuerdas.addEventListener('change', () => filtros(0));
checkbox_instrumentosPercusion.addEventListener('change', () => filtros(0));
checkbox_instrumentosViento.addEventListener('change', () => filtros(0));

//CATEGORIA FUNCION PARA ADITIVOS
checkbox_aditivos.addEventListener('change', () => filtros(3));
checkbox_baquetas.addEventListener('change', () => filtros(0));
checkbox_cuerdas.addEventListener('change', () => filtros(0));
checkbox_puas.addEventListener('change', () => filtros(0));

//filtrar
function filtros(id) {
    let existenciaFiltro = btn_yamaha.checked || btn_jackson.checked || btn_fender.checked || checkbox_marcas.checked ||
        checkbox_familias.checked || checkbox_instrumentosCuerdas.checked || checkbox_instrumentosPercusion.checked || checkbox_instrumentosViento.checked ||
        checkbox_aditivos.checked || checkbox_baquetas.checked || checkbox_puas.checked || checkbox_cuerdas.checked;

    let marcas_todo = btn_yamaha.checked && btn_jackson.checked && btn_fender.checked;
    let familias_todo = checkbox_instrumentosCuerdas.checked && checkbox_instrumentosPercusion.checked && checkbox_instrumentosViento.checked;
    let aditivos_todo = checkbox_baquetas.checked && checkbox_cuerdas.checked && checkbox_puas.checked;

    if (!existenciaFiltro) {
        mostrar_todo();
        return;
    }

    if (id == 1) {
        if (checkbox_marcas.checked) {
            btn_jackson.checked = true;
            btn_yamaha.checked = true;
            btn_fender.checked = true;
        } else {
            btn_jackson.checked = false;
            btn_yamaha.checked = false;
            btn_fender.checked = false;
        }
    } else {
        checkbox_marcas.checked = marcas_todo;
    }

    if (id == 2) {
        if (checkbox_familias.checked) {
            checkbox_instrumentosCuerdas.checked = true;
            checkbox_instrumentosPercusion.checked = true;
            checkbox_instrumentosViento.checked = true;
        } else {
            checkbox_instrumentosCuerdas.checked = false;
            checkbox_instrumentosPercusion.checked = false;
            checkbox_instrumentosViento.checked = false;
        }
    } else {
        checkbox_familias.checked = familias_todo;
    }

    if (id == 3) {
        if (checkbox_aditivos.checked) {
            checkbox_baquetas.checked = true;
            checkbox_cuerdas.checked = true;
            checkbox_puas.checked = true;
        } else {
            checkbox_baquetas.checked = false;
            checkbox_cuerdas.checked = false;
            checkbox_puas.checked = false;
        }
    } else {
        checkbox_aditivos.checked = aditivos_todo;
    }

    // Mostrar productos según combinación de filtros
    let marcasActivas = [];
    if (btn_yamaha.checked) marcasActivas.push('yamaha');
    if (btn_fender.checked) marcasActivas.push('fender');
    if (btn_jackson.checked) marcasActivas.push('jackson');

    let familiasActivas = [];
    if (checkbox_instrumentosCuerdas.checked) familiasActivas.push('instrumentosCuerdas');
    if (checkbox_instrumentosPercusion.checked) familiasActivas.push('instrumentosPercusion');
    if (checkbox_instrumentosViento.checked) familiasActivas.push('instrumentosViento');

    let aditivosActivos = [];
    if (checkbox_puas.checked) aditivosActivos.push('puas');
    if (checkbox_baquetas.checked) aditivosActivos.push('baquetas');
    if (checkbox_cuerdas.checked) aditivosActivos.push('cuerdas');

    // Mostrar todo si TODOS los filtros están activados
    if (
        marcasActivas.length === 3 &&
        familiasActivas.length === 3 &&
        aditivosActivos.length === 3
    ) {
        mostrar_todo();
        return;
    }

    let todos = document.querySelectorAll('.producto');

    todos.forEach(prod => {
        let tieneMarca = marcasActivas.length === 0 || marcasActivas.some(m => prod.classList.contains(m));
        let tieneFamilia = familiasActivas.length === 0 || familiasActivas.some(f => prod.classList.contains(f));
        let tieneAditivo = aditivosActivos.length === 0 || aditivosActivos.some(a => prod.classList.contains(a));

        if (tieneMarca && tieneFamilia && tieneAditivo) {
            prod.classList.remove('hidden');
        } else {
            prod.classList.add('hidden');
        }
    });

}

// Mostrar todo si no hay filtros
function mostrar_todo() {
    document.querySelectorAll('.producto').forEach(prod => prod.classList.remove('hidden'));
}

function normalizarTexto(texto) {
    return texto
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "") // quita acentos
        .replace(/\s+/g, " ") // tabs o espacios puesto en el codigo los remplaza por uno
        .trim() // elimina espacios al inicio y final
        .toLowerCase();
}

document.addEventListener("keyup", e => {
    if (e.target.matches("#buscador")) {

        if (e.key === "Escape") e.target.value = "";

        const valor = normalizarTexto(e.target.value);

        document.querySelectorAll(".producto").forEach(prod => {
            const textoProducto = normalizarTexto(prod.textContent);
            textoProducto.includes(valor) ?
                prod.classList.remove('hidden') :
                prod.classList.add('hidden');
        });
    }
});


/* DIVS DISEÑOS CATALOGOS */

// Al pasar el mouse  
// Escala al pasar el mouse

let productsDivs = document.querySelectorAll('#productDiv');

productsDivs.forEach(productDiv => {
    // Set transitions
    productDiv.style.transition = "all 0.3s ease-in-out";
    productDiv.style.willChange = "transform, box-shadow";

    // Hover in
    productDiv.addEventListener("mouseover", () => {
        productDiv.style.transform = "scale(1.05)";
        productDiv.classList.add('shadow-2xl', 'shadow-blue-500/20');
        productDiv.classList.remove('border-gray-200');
        productDiv.classList.add('border-blue-600', 'bg-blue-50', 'dark:bg-blue-900');
    });

    // Hover out
    productDiv.addEventListener("mouseout", () => {
        productDiv.style.transform = "scale(1)";
        productDiv.classList.remove('shadow-2xl', 'shadow-blue-500/20');
        productDiv.classList.remove('border-blue-600', 'bg-blue-50', 'dark:bg-blue-900');
        productDiv.classList.add('border-gray-200');
    });

    // Click: efecto pulsado (como un feedback visual)
    productDiv.addEventListener("click", () => {
        productDiv.style.transform = "scale(0.97)";
        setTimeout(() => {
            productDiv.style.transform = "scale(1.05)";
        }, 150);
    });
});