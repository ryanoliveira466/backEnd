 

---

# Introdução ao PHP

**PHP** (do inglês "**P**HP: **H**ypertext **P**reprocessor") é uma linguagem de programação interpretada, livre, muito usada para o desenvolvimento de aplicações web.  
Ela é executada no servidor e gera conteúdo dinâmico para a web.

- Foi criada em 1994 por Rasmus Lerdorf.
- Atualmente é uma das linguagens mais populares para construção de sites dinâmicos.
- Pode ser embutida no HTML.

Exemplo básico de código PHP:

```php
<?php
    echo "Olá, mundo!";
?>
```

---

# Conceitos e Funções Básicas do PHP

## 1. Exibir Conteúdo: `echo` e `print`

O `echo` é usado para exibir uma ou mais strings na tela:

```php
<?php
    echo "Olá, mundo!";
?>
```

O `print` também exibe conteúdo, mas retorna um valor (1), o que o torna ligeiramente diferente:

```php
<?php
    print "Olá, mundo!";
?>
```

**Diferença principal:** `echo` é um pouco mais rápido, pois não retorna valor.

---

## 2. Tipos de Variáveis em PHP

Em PHP, variáveis começam com o símbolo **$**.

Exemplos de tipos:

- **String** (texto)
- **Integer** (número inteiro)
- **Float** (número decimal)
- **Boolean** (verdadeiro ou falso)
- **Array** (lista de valores)
- **Object** (instância de uma classe)
- **NULL** (sem valor)

### Exemplos:

```php
<?php
    $nome = "Maria";       // String
    $idade = 25;            // Integer
    $altura = 1.68;         // Float
    $casado = false;        // Boolean
?>
```

---

## 3. Comentários

Comentários servem para explicar o código e são ignorados pelo PHP:

```php
<?php
    // Comentário de uma linha

    /*
      Comentário
      de múltiplas linhas
    */
?>
```

---

## 4. Operadores Básicos

PHP possui operadores matemáticos comuns:

```php
<?php
    $a = 10;
    $b = 5;

    echo $a + $b; // Soma
    echo $a - $b; // Subtração
    echo $a * $b; // Multiplicação
    echo $a / $b; // Divisão
?>
```

---

## 5. Estruturas de Controle

### Condicional `if`

```php
<?php
    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }
?>
```

### Laço `for`

```php
<?php
    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }
?>
```

---

# Conclusão

PHP é uma linguagem poderosa para criação de sites dinâmicos e interativos. Com conceitos básicos como `echo`, variáveis e estruturas de controle, já é possível desenvolver páginas web bem interessantes!

---

 
