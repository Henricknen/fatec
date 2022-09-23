DELIMITER $$

create procedure ContaPodruto (in NumVenda int, out QtdProdut int)
Begin 
	Select count(*) into QtdProdut
    from produtos_da_venda
    where numero_ven = NumVenda;
End;
$$
create procedure TotalVendas (in datai date, in dataf date, out ValorTot float)

select num(valor) into ValotTot
from venda
where data>=datai and data<=dataf;