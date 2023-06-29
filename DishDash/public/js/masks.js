const cpf = document.querySelector('#cpf');
const phone = document.querySelector('#phone');


const setMaskCPF = (e) => {
    const input = e.target;
    const mask = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
    const cpf = !mask[2]
        ? mask[1]
        : `${mask[1]}.${mask[2]}${mask[3] ? '.' + mask[3] : ''}${mask[4] ? '-' + mask[4] : ''}`;
    input.value = cpf;
};


const setMaskPhone = (e) => {
    const input = e.target;
    const mask = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,1})(\d{0,4})(\d{0,4})/);
    const phone = !mask[2]
        ? mask[1]
        : `(${mask[1]}) ${mask[2]}${mask[3] ? ' ' + mask[3] : ''}${mask[4] ? '-' + mask[4] : ''}`;
    input.value = phone;
};

cpf.addEventListener('input', setMaskCPF);
phone.addEventListener('input', setMaskPhone);
