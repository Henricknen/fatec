CREATE VIEW v_Compra (NomeF, SomaC) AS
	SELECT f.nome, sum(valor)
    FROM fornecedor f INNER JOIN compra c
    ON  f.codigo = c.codigo_for
    GROUP BY f.nome;