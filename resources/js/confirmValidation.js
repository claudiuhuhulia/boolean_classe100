const deleteForm = document.querySelectorAll('.deleteForm');

deleteForm.forEach(form => {
    form.addEventListener('submit', event => {
        event.preventDefault();
        const studentName = form.dataset.name;
        const hasConfirmed = confirm(`Do you really want to delete '${studentName}'?`);
        if (hasConfirmed) form.submit();
    });
});
