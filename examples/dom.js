function messages() {
    // Např. asychronní volání serveru, nebo výpočet

    return Math.round(Math.random() * 10);
}

function setTitle(value) {
    if (value) {
        document.title = `${document.title} (${value})`;
    }
}

setTitle(messages());

console.log('----- metody pro výběr HTML elementů -----');
// Vrací HTML element nebo NULL pokud neexituje
const list = document.getElementById('list');
// ošetření pro případ, že element nebyl nalezen
if(list) {
    console.log(list);
}

// Vrací HTML kolekci -> pokud neexistuje ani jeden prve s danou třídou, vrátí se prázdná HTML kolekce
const paragraphs = document.getElementsByClassName('paragraph');
console.log(paragraphs);

// Vrací HTML kolekci -> pokud neexistuje ani jeden prve s danou třídou, vrátí se prázdná HTML kolekce
const liElems = document.getElementsByTagName('li');
console.log(liElems);

// Vrací NodeList (pokud nebude nic nalezeno node list bude prázdný)
const firstChildLi = document.querySelectorAll('li:first-child');
console.log(firstChildLi);

// Vrací Element nebo NULL pokud nnebylo nic nalezeno
const nodeListExample = document.querySelector('.test');
console.log(nodeListExample.childNodes);

console.log('----- cyklické procházení NodeListu -----');
const nodeListChildren = nodeListExample.childNodes;
for (let i = 0; i < nodeListChildren.length; i++) {
    const node = nodeListChildren[i];
    if(node.nodeName.includes('#')) {
        continue;
    }
    console.log(node.classList);

    // console.log(nodeListChildren[i].classList.entries());
}

// nastavení atributů HTML značek
const img = document.querySelector('img');
img.alt = 'Květiny';
img.setAttribute('alt', 'Květiny - růže');
console.log(img);

// úprava CSS vlastností
const heading = document.querySelector('.main-heading');
if (heading) {
    heading.style.color = '#654321';
    heading.style.fontSize = '3.5rem';
}

// vyskakovací okno - notifikace - Toast
function createToast(message) {
    const toastId = `toast-${Math.random()}`;

    const toast = document.createElement('div');
    toast.style.width = '15rem';
    toast.style.padding = '1rem';
    toast.style.borderRadius = '0.75rem';
    toast.style.boxShadow = '0.25rem 0.25rem 1rem rgba(0, 0, 0, 0.3)';
    toast.style.position = 'fixed';
    toast.style.top = '2rem';
    toast.style.right = '2rem';
    toast.style.background = '#ffffff';

    toast.setAttribute('id', toastId);
    toast.classList.add('toast');

    const em = document.createElement('em');
    em.innerText = message;

    toast.appendChild(em);

    document.body.appendChild(toast);

    return toastId;
}

function removeToast(toastId) {
    const toast = document.getElementById(toastId);
    if (toast) {
        toast.remove();
    }
}

function removeAllToasts() {
    const toasts = document.getElementsByClassName('toast');
    for (let toast of toasts) {
        toast.remove();
    }
}

const toastId = createToast('Testovací zpráva');
console.log(toastId);

removeAllToasts();
