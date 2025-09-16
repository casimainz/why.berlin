document.addEventListener("DOMContentLoaded", function(event) {

    const onButtonClick = (e) => {
        e.preventDefault();
        const link = e.target.href;
        e.target.closest('.row').remove();
        const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                const html = document.createElement( 'html' );
                html.innerHTML = this.responseText;
                const rows = html.querySelectorAll('.rw-news__list--wrap .row');
                rows.forEach(r => {
                    document.querySelector(".rw-news__list--wrap").append(r);
                })
                if (document.querySelector('.js-load-list'))
                    document
                        .querySelector('.js-load-list')
                        .addEventListener('click', onButtonClick);
              }
            };
            xhttp.open("GET", link, true);
            xhttp.send();
    };

    const onButtonClickNewList = (e) => {
        console.log('click');
        e.preventDefault();
        const link = e.target.href;
        e.target.closest('.row').remove();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const html = document.createElement('html');
                html.innerHTML = this.responseText;
                const rows = html.querySelectorAll('.js-list-response .c-newsList_item');
                rows.forEach((r) => {
                    document.querySelector('.c-newsList_lyt').append(r);
                });
                const button = html.getElementsByClassName('js-button-wrap');
                if (button.length > 0) {
                  document.querySelector('.c-newsList_lyt').after(button[0]);
                }
                
                if (document.querySelector('.js-load-list-new'))
                    document
                        .querySelector('.js-load-list-new')
                        .addEventListener('click', onButtonClickNewList);
            }
        };
        xhttp.open('GET', link, true);
        xhttp.send();
    };

    if (document.getElementsByClassName('js-load-list').length > 0) {
      document.querySelector('.js-load-list').addEventListener('click', onButtonClick);
    }

    if (document.getElementsByClassName('js-load-list-new').length > 0) {
        document
            .querySelector('.js-load-list-new')
            .addEventListener('click', onButtonClickNewList);
    }
});
