//fonction Survol souris

let change = document.getElementsByClassName('bloc');
let changeEdit = document.getElementsByClassName('editBloc')
console.log(change);

for (let i = 0; i < change.length; i++) {
  change[i].addEventListener('mouseover', function (j) {
    change[i].style.color = 'black'; //  change le texte en noir au survol du bloc
    change[i].style.background = 'white'; //  change le background en blanc au survol du bloc
    change[i].style.transition = '0.4s';

    change[i].addEventListener('mouseleave', function (j) {
      change[i].style.color = 'white'; // le texte revient blanc lorsque la souris quitte le bloc
      change[i].style.background = 'black'; // le background revient blanc lorsque la souris quitte le bloc
      change[i].style.transition = '0.4s';
    })
  })
}

for (let i = 0; i < changeEdit.length; i++) {
  changeEdit[i].addEventListener('mouseover', function (e) {
    changeEdit[i].style.color = 'black'; //  change le texte en noir au survol du bloc
    changeEdit[i].style.background = 'orange'; //  change le background en blanc au survol du bloc
    changeEdit[i].style.transition = '0.4s';

    changeEdit[i].addEventListener('mouseleave', function (e) {
      changeEdit[i].style.color = 'orange'; // le texte revient blanc lorsque la souris quitte le bloc
      changeEdit[i].style.background = 'black'; // le background revient blanc lorsque la souris quitte le bloc
      changeEdit[i].style.transition = '0.4s';
    })
  })
}


