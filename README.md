# CRUD com MySQL e PHP

> Status: Development

## National-School

<img src="https://i.postimg.cc/prgzH5Yy/bank-small.png" alt="bank-small" width="100%">

Projeto proposto pela matéria PW2 da Etec Zona Leste, ao qual consiste no desenvolvimento de um CRUD com MySQL e PHP com a temática de Escola.

# Desenvolvimento

Desenvolvido com `HTML`, 
o intuito de aprender `React`, a princípio apenas para praticar com formulários e os hooks, `useState`, `useRef` e `useEffect`, ao qual acabou se desenvolvendo no Projeto atual.

# hooks

* `useState` 

  - O React useState nos permite rastrear o estado em um componente de função.
  Inicializamos nosso estado chamando useState em nosso componente de função.
```js
    import { useState } from "react";
    
    const [color, setColor] = useState("");
```
* `useRef` 

  - Ele pode ser usado para acessar diretamente um elemento DOM.

```js
    import { useRef  } from "react";
    
    const inputElement = useRef();

    return (
        <input type="text" ref={inputElement} />
    );
```
* `useEffect` 

  - Eles permitem que você use o estado e outros recursos do React sem escrever uma classe.

```js
    useEffect(() => {
        console.log('Hello World');
    }, []);
```
## Dependências Utilizadas

* react-router-dom

* axios

##

https://user-images.githubusercontent.com/109045257/191387195-147fc9db-53f6-4c97-9746-7a3ce7bf0f07.mp4
