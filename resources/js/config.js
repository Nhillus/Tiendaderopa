/*
    Defines the API route we are using.
*/
var api_url = '';

switch( process.env.NODE_ENV ){
  case 'development':
    api_url = 'http://localhost:8000/api/v1';
  break;
  case 'production':
   // colocar el api_url de produccion.
  break;
}

export const DEINDEAL_CONFIG = {
  API_URL: api_url,
}