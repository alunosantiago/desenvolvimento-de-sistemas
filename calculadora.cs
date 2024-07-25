using System;

class Program
{
    static void Main()
    {
        double num1, num2, resultado;
        char operacao;

       
        Console.Write("Digite o primeiro numero: ");
        num1 = Convert.ToDouble(Console.ReadLine());

        Console.Write("Digite o segundo numero: ");
        num2 = Convert.ToDouble(Console.ReadLine());

        
        Console.Write("Escolha a operacao (+, -, *, /): ");
        operacao = Convert.ToChar(Console.ReadLine());

        
        if (operacao == '+')
        {
            resultado = num1 + num2;
        }
        else if (operacao == '-')
        {
            resultado = num1 - num2;
        }
        else if (operacao == '*')
        {
            resultado = num1 * num2;
        }
        else if (operacao == '/')
        {
          
            if (num2 != 0)
            {
                resultado = num1 / num2;
            }
            else
            {
                Console.WriteLine("Erro: divisao por zero");
                return; 
            }
        }
        else
        {
            Console.WriteLine("Operacao invalida.");
            return; 
        }

        Console.WriteLine("Resultado: " + resultado);
    }
}