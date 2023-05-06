create or replace view v_societedetaille as(
    select s.id idsociete,s.nomsociete,em.mail,s.datecreation,n.numero NIF, st.numero STAT,r.numero RCS, s.capital,d.nom nomdevise,ad.adresse,s.siege,t.telephone,s.objet,e.datedebutexercice from societe s
    JOIN nif n ON s.idnif=n.id
    JOIN stat st ON s.idstat= st.id
    JOIN rcs r ON s.idrcs = r.id
    JOIN exercice e ON s.idexercice=e.id
    JOIN devise d ON s.iddevise= d.id
    JOIN email em ON s.id = em.idsociete
    JOIN adresse ad ON s.id=ad.idsociete
    JOIN telephone t ON s.id=t.idsociete
);


create or replace view v_grand_livre as(
    select ej.numcompte,c.label,ej.debit,ej.credit from ecriture_journal ej
    JOIN compte c ON ej.numcompte= c.numero
);

create or replace view v_balance as (
  select numcompte,label, sum(debit) debit, sum(credit) credit
    from v_grand_livre
    group by numcompte, label
    order by numcompte ASC
);

select sum(debit) totalDebit, sum(credit) totalCredit from v_balance;