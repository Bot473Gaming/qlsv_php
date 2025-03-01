<script>
    var btnEdits = document.querySelectorAll('.btnEdits');
    var btnDelete = document.querySelectorAll('.btnDelete');
    Array.from(btnEdits).forEach(btn => {
        btn.addEventListener('click', function() {
            var subject = btn.parentNode.parentNode.cells[2].textContent;
            var inp = document.querySelector('input[name="name"]')
            inp.value = subject;
            var _id = btn.parentNode.parentNode.cells[0].textContent;
            var inpId = document.querySelectorAll('.sd-id');
            Array.from(inpId).forEach(inp => inp.value = _id);
        });
    });
    Array.from(btnDelete).forEach(btn => {
        btn.addEventListener('click', function() {
            var _id = btn.parentNode.parentNode.cells[0].textContent;
            var inpId = document.querySelectorAll('.sd-id');
            Array.from(inpId).forEach(inp => inp.value = _id);
        });
    })
</script>