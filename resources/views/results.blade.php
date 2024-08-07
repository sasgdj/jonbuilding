<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
<div class="p-5 md:p-16 lg:p-20">

@if(session('status'))
<h1 class="text-xl md:text-2xl">
{{session('status')}}
<P>
Hola, John Doe:
<P>
PayPal	
<P>	</h1>	
	
Envió un pago de $9,99 USD a Test Store (cs-sb-kms4k16180382@business.example.com)
<P>
Esta transacción puede tardar unos momentos en aparecer en su cuenta.
<P>
Id. de transacción
4LE93991XR062114P
<P>
Fecha de la transacción
14/05/2022 9:43:42 PDT
<P>
Comercio
Test Store
cs-sb-kms4k16180382@business.example.com
<P>
Instrucciones para el comercio
No ha incluido ninguna instrucción.
<P>
Dirección de envío
John Doe
Free Trade Zone
Caracas 1012, Caracas
Venezuela
<P>
Detalles del envío
El vendedor todavía no ha proporcionado información del envío.
<P>
Descripción	Precio unitario	Cant.	Importe
$3,99 USD	1	$9,99 USD
Subtotal	$9,99 USD
Total	$9,99 USD
Pago	$9,99 USD
Pago enviado a cs-sb-kms4k16180382@business.example.com
Formas de pago utilizadas (total)	
Saldo de PayPal	$9,99 USD
¿Tiene problemas con esta transacción?
Dispone de 180 días desde la fecha de la transacción para presentar una controversia en el Centro de resoluciones.

<P>
PayPal tiene el compromiso de prevenir los correos electrónicos fraudulentos. Los correos electrónicos de PayPal siempre contienen su nombre completo. Más información sobre cómo identificar el phishing.

<P>
Copyright © 1999-2022 PayPal. Todos los derechos reservados.
<P>
PayPal Pte. Ltd. ("3PL") ha solicitado una licencia en virtud de la Ley de servicios de pago de Singapur ("Ley SP") con la Autoridad Monetaria de Singapur. Durante este período de transición legal, 3PL está operando bajo exención de tener licencia y se le permite continuar brindando servicios de pago específicos.



@endif
</div>







</html>
