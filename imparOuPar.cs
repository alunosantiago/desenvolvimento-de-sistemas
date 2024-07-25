using System;

class Program
{
    static void Main()
    {
        int numero;

        Console.WriteLine("Verificador de número Par ou Ímpar");
        Console.WriteLine("----------------------------------");

        Console.Write("Digite um número inteiro: ");
        while (!int.TryParse(Console.ReadLine(), out numero))
        {
            Console.WriteLine("Por favor, digite um número inteiro válido.");
            Console.Write("Digite um número inteiro: ");
        }

        if (numero % 2 == 0)
        {
            Console.WriteLine($"{numero} é um número par.");
        }
        else
        {
            Console.WriteLine($"{numero} é um número ímpar.");
        }
    }
}