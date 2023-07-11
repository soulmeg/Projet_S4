    -- REGIME
    select PrixRegime.idRegime,Regime.nom,PrixRegime.apport,PrixRegime.duree,PrixRegime.PrixRegime
    from PrixRegime
    join Regime 
    on PrixRegime.idRegime=Regime.idRegime where Regime.idRegime='4' and PrixRegime.apport <= 4000 ;


-- ACTIVITE
select a.idActivite,a.nom,da.duree,da.perte
from detailActivite as da 
join activite as a
on a.idActivite = da.idActivite;
-- 
select*
regime where 