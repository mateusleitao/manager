<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <h1 class="text-3xl font-bold underline text-center">Página de Cadastro</h1>
        <form action="/createUser" method="POST" class="">
            @csrf
            <div>
                <label for="Seu nome:"></label>
                <input type="text" placeholder="Insira seu nome aqui" name="name_user" id="name_user">
            </div>
            <div>
                <label for="Email:"></label>
                <input type="email" placeholder="Insira seu email aqui" name="email_user" id="email_user">
            </div>
            <div>
                <label for="Password:"></label>
                <input type="password" placeholder="Insira sua senha aqui" name="password_user" id="password_user"
                    oninput="validatePassword(this)" required>
            </div>
            <div>
                <label for="Birthday"></label>
                <input type="date" placeholder="Your birthday" name="birthday_user" id="birthday_user"
                    oninput="validateBirthday(this)" required>
            </div>
            <div>
                <label for="Company name:"></label>
                <input type="text" placeholder="Insert your company here" name="company_user" id="company_user">
            </div>
            <div>
                <label for="CPF"></label>
                <input type="text" placeholder="Insert your CPF here" oninput="formatCPF(this)"
                    pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" name="cpf_user" id="cpf_user" required>
            </div>
            <div>
                <label for="Profession"></label>
                <input type="text" placeholder="Insert your profession here" name="profession_user"
                    id="profession_user">
            </div>
            <input type="submit" value="Confirmar" class="btn-primary rounded-full py-2 px-4">
        </form>
    <script>
        function formatCPF(input) {
            input.value = input.value.replace(/\D/g, '')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d)/, '$1.$2')
                .replace(/(\d{3})(\d{1,2})/, '$1-$2');
            if (cpf.length != 11) return false;
            var resto;
            var soma = 0;
            for (var i = 1; i <= 9; i++) soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
            resto = (soma * 10) % 11;
            if ((resto == 10) || (resto == 11)) resto = 0;
            if (resto != parseInt(cpf.substring(9, 10))) return false;
            soma = 0;
            for (var i = 1; i <= 10; i++) soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
            resto = (soma * 10) % 11;
            if ((resto == 10) || (resto == 11)) resto = 0;
            if (resto != parseInt(cp
                }

                function validatePassword(input) {
                    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W)[a-zA-Z\d\W]{8,}$/;
                    if (!regex.test(input.value)) {
                        input.setCustomValidity(
                            'A senha deve ter pelo menos 8 caracteres, incluindo pelo menos 1 letra minúscula, 1 letra maiúscula, 1 caracter especial e 1 dígito.'
                        );
                    } else {
                        input.setCustomValidity('');
                    }
                }

                function validateBirthday(input) {
                    if (isNaN(Date.parse(input.value))) {
                        input.setCustomValidity('Insira uma data de nascimento válida no formato yyyy-mm-dd.');
                    } else {
                        var age = Date.now() - Date.parse(input.value);
                        if (age < 120 * 365 * 24 * 60 * 60 * 1000) {
                            input.setCustomValidity('');
                        } else {
                            input.setCustomValidity('Insira uma data de nascimento real!');
                        }
                    }
                }
    </script>
</body>

</html>
