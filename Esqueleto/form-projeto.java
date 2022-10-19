<% @page language = "java" import="java.sql.*"%>


<%
    /*Criando as variáveis para armazenar as informações digitadas pelo usuário. */

    String vnome = request.getParameter("cadastro-nome");
    String vemail ; request.getParameter("cadastro-email"); 
    int vsenha ; Interger.parseInt(request.getParameter("cadastro-senha"));
    float vcpf ;Interger.parseFloat(request.getParameter("cadastro-cpf"));
    int vtelefone ; Interger.parseInt(request.getParameter("cadastro-telefone")); 

    /*Variáveis para o banco de dados*/
    String banco = "aula" ;
    String endereco = "jdbc:mysql://localhost:3306/" + banco ;
    String usuario = "root";
    String senha  = "";

    String driver = "com.mysql.jdbc.Driver";

    /*Carregar o driver na memória */
    Class.forName( driver);
    /*Criando uma variável para se conectar com o banco */
    Connection conexao;
    /*Abrir a conexão */
    conexao = DriverManager.getConnection(endereco, usuario, senha);

    /*Variável responsável por inserir dados no banco */
    String slq = "INSERT INTO possiveisclientes (nome, email, senha, cpf, telefone) values (?, ?, ?, ?, ?)";

    PreparedStatement stm = conexao.prepareStatement(sql);
    stm.setString(1, vnome);
    stm.setString(2, vemail);
    stm.setInt(3, vsenha);
    stm.setFloat(4, vcpf);
    stm.setInt(5, vtelefone);

    stm.execute();
    out.print("Ddos gravados com sucesso!!!");
%>
 


/*O Interger.paserInt faz a conversão de string para número inteiro, afinal tudo que o usuário digita é texto. */