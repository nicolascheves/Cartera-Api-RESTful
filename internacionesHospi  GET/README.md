REQUERIMIENTOS

i) Lista internaciones por fecha ascendete
* De paciente

ii) Obtener Id de la cama donde fue internado por ultima vez

GET     api/Internaciones?sort=fecha&order='ASC'

GET     api/Internacion/{:id}/cama?order="DESC"?&Limit=1;

**
GET     api/Internacion/sort=ingreso&order="DESC"?&Limit=1;

b) IMPLEMENTAR controlador y modelo c/endpoints