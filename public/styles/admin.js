document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.add-qualification').addEventListener('click', addQualificationField);
    document.querySelector('.add-education').addEventListener('click', addEducationField);

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-qualification')) {
            event.target.closest('.qualification').remove();
        }
        if (event.target.classList.contains('remove-education')) {
            event.target.closest('.education').remove();
        }
    });
});

function addQualificationField() {
    const qualification = document.createElement('div');
    qualification.classList.add('qualification');
    qualification.innerHTML = `
        <input type="text" class="form-control" name="qualification[]" placeholder="Квалификация" value="">
        <input type="text" class="form-control" name="qualification_year[]" placeholder="Год квалификации" value="">
        <button type="button" class="btn btn-sm btn-danger remove-qualification">Удалить</button>
    `;
    document.getElementById('qualifications').appendChild(qualification);
}

function addEducationField() {
    const education = document.createElement('div');
    education.classList.add('education');
    education.innerHTML = `
        <input type="text" class="form-control" name="education[]" placeholder="Образование" value="">
        <input type="text" class="form-control" name="year[]" placeholder="Год" value="">
        <button type="button" class="btn btn-sm btn-danger remove-education">Удалить</button>
    `;
    document.getElementById('educations').appendChild(education);
}
