const post = document.getElementById('post')
const ad = document.createElement('div')

ad.id = 'insertpublihs'
ad.textContent = 'Publicidad' 

const getMiddleChild = element =>
{
    const childs = element.children,
    l = childs.length,
    i = Math.floor(l/2)
    return childs[i]
}
const middleChild = getMiddleChild (post)

post.insertBefore(ad,middleChild)