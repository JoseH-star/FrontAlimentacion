document.addEventListener("DOMContentLoaded", function() {
    loadFruits();
});

async function loadFruits(search = '') {
    try {
        const response = await fetch(`http://localhost:8000/api/frutas?search=${search}`);
        const frutas = await response.json();
        
        const container = document.getElementById('frutasContainer');
        container.innerHTML = '';
        
        frutas.forEach(fruta => {
            const card = `
                <div class="card">
                    <div class="image">
                        <img src="{{ asset('storage/${fruta.imagen}') }}" alt="${fruta.fruta}" class="recipe-image">
                    </div>
                    <div class="recipe-info">
                        <h2>${fruta.fruta}</h2><br>
                        <p>${fruta.descripcion}</p><br>
                        <b><p>Clasificación:</b></p>
                        <p>${fruta.clasificacion}</p><br>
                        <b><p>Peso promedio:</b></p>
                        <p>${fruta.peso_promedio}</p><br>
                        <b><p>Color:</b></p>
                        <p>${fruta.color}</p><br>
                        <b><p>Usos comunes:</b></p>
                        <p>${fruta.usos}</p><br>
                    </div>
                </div>
            `;
            container.innerHTML += card;
        });
        
    } catch (error) {
        console.error("Error cargando frutas:", error);
    }
}

// Función para el buscador
function filterFruits() {
    const searchTerm = document.getElementById('searchInput').value;
    loadFruits(searchTerm);
}