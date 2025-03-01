<script>
    var inps = document.querySelectorAll('.score-form');
    var scores = document.querySelectorAll('.scoreTb');
    var btnScore = document.querySelector('.btn-score');
    btnScore.onclick = () => {
        Array.from(inps).forEach((inp, index) => {
            var val = scores[index].textContent;
            inp.value = val;
        });
    }
</script>