export const handler = async (event) => {
  const tarefas = [
    {
      descricao: "Estudar Java, Angular e Typescript",
      status: "Pendente",
    },
    {
      descricao: "Escrever o TCC sobre Redes Neurais Convolucionais",
      status: "Finalizada",
    },
    {
      descricao: "Reunião com a equipe de desenvolvimento (10h)",
      status: "Pendente",
    },
    {
      descricao: "Atualizar documentação do projeto",
      status: "Finalizada",
    },
    {
      descricao: "Fazer deploy do backend na AWS",
      status: "Pendente",
    },
    {
      descricao: "Testar funcionalidades no ambiente de produção",
      status: "Pendente",
    },
  ];

  return {
    statusCode: 200,
    headers: {
      "Content-Type": "application/json",
      "Access-Control-Allow-Origin": "*", 
    },
    body: JSON.stringify(tarefas),
  };
};
