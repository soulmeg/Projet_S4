-- REGIME

select PrixRegime.idRegime,Regime.nom,Regime.apport,PrixRegime.duree,PrixRegime.PrixRegime
from PrixRegime
join Regime 
on PrixRegime.idRegime=Regime.idRegime;
