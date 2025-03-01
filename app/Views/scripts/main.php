<script>
  function editBtn(id) {
    const dataStudents = document.querySelector('tbody').children;
    var inputForm = document.querySelectorAll('.edit-form')
    var student = Array.from(dataStudents).find(student => student.querySelector('.nb').textContent == id);
    addId(id);
    student = student.querySelectorAll('.dt');
    Array.from(student).forEach((val, index) => {
      inputForm[index].value = val.textContent
    });
  }

  function addId(__id) {
    var inpId = document.querySelectorAll('.sd-id');
    Array.from(inpId).forEach(inp => inp.value = __id);

  }
  var checkboxs = document.querySelectorAll('.form-check-input');
  var allCheckBox = document.querySelector('.all-check-input');
  var btnApply = document.querySelector('.btn-apply');
  var formApply = document.querySelector('.form-apply');
  var selectAction = document.querySelector('.action-select');
  try {
    allCheckBox.onclick = () => {
      var isCheckAll = allCheckBox.checked;
      Array.from(checkboxs).forEach(checkbox => {
        checkbox.checked = isCheckAll
      })
      var someCheck = Array.from(checkboxs).some(checkbox => checkbox.checked);
      if (someCheck && selectAction.value != 'null') {
        if (btnApply.classList.contains('disabled')) {
          btnApply.classList.remove('disabled');
        }
      } else {
        if (!btnApply.classList.contains('disabled')) {
          btnApply.classList.add('disabled');
        }
      }
    }
    Array.from(checkboxs).forEach(checkbox => checkbox.onchange = () => {
      var isCheckAll = Array.from(checkboxs).every(checkbox => checkbox.checked);
      var someCheck = Array.from(checkboxs).some(checkbox => checkbox.checked);
      allCheckBox.checked = isCheckAll;
      if (someCheck && selectAction.value != 'null') {
        if (btnApply.classList.contains('disabled')) {
          btnApply.classList.remove('disabled');
        }
      } else {
        if (!btnApply.classList.contains('disabled')) {
          btnApply.classList.add('disabled');
        }
      }
    })
    selectAction.onchange = () => {
      var someCheck = Array.from(checkboxs).some(checkbox => checkbox.checked);
      // formApply.action = `/handle?_method=${selectAction.value}`;
      if (someCheck && selectAction.value != 'null') {
        if (btnApply.classList.contains('disabled')) {
          btnApply.classList.remove('disabled');
        }
      } else {
        if (!btnApply.classList.contains('disabled')) {
          btnApply.classList.add('disabled');
        }
      }
    }
    btnApply.onclick = (e) => {
      var studentIds = document.querySelector('input[name=studentIds]');
      const dataStudents = document.querySelectorAll('tbody > tr');
      var st = Array.from(dataStudents).filter((student, index) => checkboxs[index].checked).map(val => val.querySelector('.nb').textContent).join(',');
      // console.log(st)
      studentIds.value = st;
      // formApply.submit();
    }

  } catch (e) {
    
  }
  Array.prototype.remove = function() {
    var what, a = arguments,
      L = a.length,
      ax;
    while (L && this.length) {
      what = a[--L];
      while ((ax = this.indexOf(what)) !== -1) {
        this.splice(ax, 1);
      }
    }
    return this;
  };
  var Models = document.querySelectorAll('[notSame]');
  Array.from(Models).forEach(Model => {
    var temp = Model.getAttribute('notSame').split(':'); 
    var target = temp.shift();
    var val = temp.shift();
    var btnOpens = document.querySelectorAll(`[notSameTarget="${target}"]`);
    Array.from(btnOpens).forEach(btnOpen => {
      btnOpen.addEventListener('click', function() {
        var canSubmit = true;
        var store = document.querySelectorAll('.' + val);
        store = Array.from(store).map(val => (val.textContent).toLocaleLowerCase());

        var form = Model;
        var inpCode = form.querySelector(`input[name=${val}]`);
        var message_err = form.querySelector('.invalid-feedback');
        if (store.includes(inpCode.value.toLocaleLowerCase()) && canSubmit) {
          store.remove(inpCode.value.toLocaleLowerCase());
        }
        console.log(inpCode.value, store)
        inpCode.onchange = function() {
          this.value = this.value.trim();
          if (store.includes(this.value.toLocaleLowerCase())) {
            message_err.style.display = 'block';
            canSubmit = false;
          } else {
            message_err.style.display = 'none';
            canSubmit = true;
          }
        }
        form.onsubmit = function(e) {
          if (!canSubmit) {
            inpCode.focus();
            e.preventDefault();
          }
        }
      })
    })
  });
</script>