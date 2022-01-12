'use strict'

{
    const deletes = document.querySelectorAll('.delete-form');
    deletes.forEach(span => {
        span.addEventListener('click', () => {
            if (confirm('本当に削除しますか')) {
                span.parentNode.submit();
            }
        });
    });
}
