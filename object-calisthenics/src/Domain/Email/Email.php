<?php

namespace Alura\Calisthenics\Domain\Email;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Invalid e-mail address');
        }

        $this->email = $email;
    }

    /**
     * Método mágico que retorna o valor da propriedade email
     * como string automaticamente ao usar a classe.
     * @return string
     */
    public function __toString(): string
    {
        return $this->email;
    }
}
