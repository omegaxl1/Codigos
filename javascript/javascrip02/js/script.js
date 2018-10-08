const clic = () => alert('un click')
document.querySelector('button').addEventListener('click',clic)

const cambio = document.createElement('p')
const cambioContainer = document.getElementById('cambio')
cambio.textContent = 'JOSE'
cambio.classList.add('camb')

if(cambioContainer && cambioContainer.querySelector('span'))
{
    cambioContainer.querySelector('span').appendChild(cambio)
}

