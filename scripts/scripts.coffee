App = App or {}

App.apps =
  OlaTeste: ->
    console.log 'Teste { frase: "Este script roda no server!"; }'
    return

do ->
  App.apps.OlaTeste()
  return