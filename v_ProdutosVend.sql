CREATE VIEW v_ProdutosVend (NomeP, QtdV, ValorU) AS
	SELECT p.nome, pv.qtd_ven, pv.valor_uni
    FROM produto p INNER JOIN produtos_da_venda pc
    ON  p.codigo = pv.codigo_pro;