PGDMP                         z            postgres    14.0    14.0 ?    x           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            y           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            z           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            {           1262    13754    postgres    DATABASE     d   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE postgres;
                postgres    false            |           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    3707                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                   false            }           0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                        false    2            ?            1259    26181 	   accidente    TABLE     ?  CREATE TABLE public.accidente (
    nro_referenciaacc integer NOT NULL,
    fecha_acc date NOT NULL,
    lugar_acc character varying(45) NOT NULL,
    hora_acc time without time zone NOT NULL,
    id_categoria integer NOT NULL,
    CONSTRAINT accidente_id_categoria_check CHECK ((id_categoria >= 0)),
    CONSTRAINT accidente_nro_referenciaacc_check CHECK ((nro_referenciaacc >= 0))
);
    DROP TABLE public.accidente;
       public         heap    postgres    false            ?            1259    26186    agente    TABLE     ?   CREATE TABLE public.agente (
    id_agente integer NOT NULL,
    direc_agente character varying(45) NOT NULL,
    tipo_agente character varying(45) NOT NULL,
    CONSTRAINT agente_id_agente_check CHECK ((id_agente >= 0))
);
    DROP TABLE public.agente;
       public         heap    postgres    false            ?            1259    26190    banda_salarial    TABLE     ~  CREATE TABLE public.banda_salarial (
    id_banda integer NOT NULL,
    banda_min real NOT NULL,
    banda_max real NOT NULL,
    CONSTRAINT banda_salarial_banda_max_check CHECK ((banda_max >= (0)::double precision)),
    CONSTRAINT banda_salarial_banda_min_check CHECK ((banda_min >= (0)::double precision)),
    CONSTRAINT banda_salarial_id_banda_check CHECK ((id_banda >= 0))
);
 "   DROP TABLE public.banda_salarial;
       public         heap    postgres    false            ?            1259    26200    categoria_accidente    TABLE       CREATE TABLE public.categoria_accidente (
    id_categoria integer NOT NULL,
    descripcateg character varying(45) NOT NULL,
    descripsubcategoria character varying(45) NOT NULL,
    CONSTRAINT categoria_accidente_id_categoria_check CHECK ((id_categoria >= 0))
);
 '   DROP TABLE public.categoria_accidente;
       public         heap    postgres    false            ?            1259    26204    categoria_vehiculo    TABLE     ?   CREATE TABLE public.categoria_vehiculo (
    id_categoria integer NOT NULL,
    descripcateg character varying(45) NOT NULL,
    CONSTRAINT categoria_vehiculo_id_categoria_check CHECK ((id_categoria >= 0))
);
 &   DROP TABLE public.categoria_vehiculo;
       public         heap    postgres    false            ?            1259    26208    ciudad    TABLE       CREATE TABLE public.ciudad (
    id_ciudad integer NOT NULL,
    nb_ciudad character varying(45) NOT NULL,
    id_municipio integer NOT NULL,
    CONSTRAINT ciudad_id_ciudad_check CHECK ((id_ciudad >= 0)),
    CONSTRAINT ciudad_id_municipio_check CHECK ((id_municipio >= 0))
);
    DROP TABLE public.ciudad;
       public         heap    postgres    false            ?            1259    26213    cliente    TABLE     ?  CREATE TABLE public.cliente (
    id_cliente integer NOT NULL,
    apellido_cliente character varying(45) NOT NULL,
    nombre_cliente character varying(45) NOT NULL,
    direc_cliente character varying(80) NOT NULL,
    calle character varying(45) NOT NULL,
    ciudad character varying(45) NOT NULL,
    genero character varying(3) NOT NULL,
    fecha_nac date NOT NULL,
    id_sucursal integer NOT NULL,
    CONSTRAINT cliente_genero_check CHECK ((((genero)::text = 'M'::text) OR ((genero)::text = 'F'::text) OR ((genero)::text = 'N/A'::text))),
    CONSTRAINT cliente_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT cliente_id_sucursal_check CHECK ((id_sucursal >= 0))
);
    DROP TABLE public.cliente;
       public         heap    postgres    false            ?            1259    26219    contrata_inmueble    TABLE     u  CREATE TABLE public.contrata_inmueble (
    id_inmueble integer NOT NULL,
    id_cliente integer NOT NULL,
    id_agente integer NOT NULL,
    fecha_contrato timestamp without time zone NOT NULL,
    estado_contrato character varying(20) NOT NULL,
    monto_comision_ag real NOT NULL,
    CONSTRAINT contrata_inmueble_id_agente_check CHECK ((id_agente >= 0)),
    CONSTRAINT contrata_inmueble_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT contrata_inmueble_id_inmueble_check CHECK ((id_inmueble >= 0)),
    CONSTRAINT contrata_inmueble_monto_comision_ag_check CHECK ((monto_comision_ag >= (0)::double precision))
);
 %   DROP TABLE public.contrata_inmueble;
       public         heap    postgres    false            ?            1259    26226    contrata_vehiculo    TABLE     &  CREATE TABLE public.contrata_vehiculo (
    id_cliente integer NOT NULL,
    id_agente integer NOT NULL,
    matricula character varying(8) NOT NULL,
    fecha_contrato timestamp without time zone NOT NULL,
    recargo real NOT NULL,
    descuentos real NOT NULL,
    estado_contrato character varying(20) NOT NULL,
    monto_comision_ag real NOT NULL,
    CONSTRAINT contrata_vehiculo_descuentos_check CHECK ((descuentos >= (0)::double precision)),
    CONSTRAINT contrata_vehiculo_id_agente_check CHECK ((id_agente >= 0)),
    CONSTRAINT contrata_vehiculo_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT contrata_vehiculo_monto_comision_ag_check CHECK ((monto_comision_ag >= (0)::double precision)),
    CONSTRAINT contrata_vehiculo_recargo_check CHECK ((recargo >= (0)::double precision))
);
 %   DROP TABLE public.contrata_vehiculo;
       public         heap    postgres    false            ?            1259    26234    contrata_vida    TABLE     ?  CREATE TABLE public.contrata_vida (
    id_vida integer NOT NULL,
    id_cliente integer NOT NULL,
    idpersona integer NOT NULL,
    id_agente integer NOT NULL,
    fecha_contrato timestamp without time zone NOT NULL,
    estado_contrato character varying(20) NOT NULL,
    monto_comision_ag real NOT NULL,
    CONSTRAINT contrata_vida_id_agente_check CHECK ((id_agente >= 0)),
    CONSTRAINT contrata_vida_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT contrata_vida_id_vida_check CHECK ((id_vida >= 0)),
    CONSTRAINT contrata_vida_idpersona_check CHECK ((idpersona >= 0)),
    CONSTRAINT contrata_vida_monto_comision_ag_check CHECK ((monto_comision_ag >= (0)::double precision))
);
 !   DROP TABLE public.contrata_vida;
       public         heap    postgres    false            ?            1259    26242    empleado    TABLE     ?   CREATE TABLE public.empleado (
    id_empleado integer NOT NULL,
    fecha_inicio_empresa date NOT NULL,
    CONSTRAINT empleado_id_empleado_check CHECK ((id_empleado >= 0))
);
    DROP TABLE public.empleado;
       public         heap    postgres    false            ?            1259    26246    estado    TABLE       CREATE TABLE public.estado (
    id_estado integer NOT NULL,
    nb_estado character varying(45) NOT NULL,
    id_pais integer NOT NULL,
    CONSTRAINT estado_id_estado_check CHECK ((id_estado >= 0)),
    CONSTRAINT estado_id_pais_check CHECK ((id_pais >= 0))
);
    DROP TABLE public.estado;
       public         heap    postgres    false            ?            1259    26251    financiadora    TABLE       CREATE TABLE public.financiadora (
    id_financiadora integer NOT NULL,
    direc_financ character varying(45) NOT NULL,
    tlffinanciadora character varying(15) NOT NULL,
    CONSTRAINT financiadora_id_financiadora_check CHECK ((id_financiadora >= 0))
);
     DROP TABLE public.financiadora;
       public         heap    postgres    false            ?            1259    26255    inmueble    TABLE     ?  CREATE TABLE public.inmueble (
    id_inmueble integer NOT NULL,
    direcinmueble character varying(150) NOT NULL,
    valor real NOT NULL,
    contenido character varying(100) NOT NULL,
    riesgos_auxiliares character varying(45) NOT NULL,
    CONSTRAINT inmueble_id_inmueble_check CHECK ((id_inmueble >= 0)),
    CONSTRAINT inmueble_valor_check CHECK ((valor >= (0)::double precision))
);
    DROP TABLE public.inmueble;
       public         heap    postgres    false            ?            1259    26260 	   involucra    TABLE     -  CREATE TABLE public.involucra (
    nro_referenciaacc integer NOT NULL,
    matricula character varying(8) NOT NULL,
    idpersona integer NOT NULL,
    CONSTRAINT involucra_idpersona_check CHECK ((idpersona >= 0)),
    CONSTRAINT involucra_nro_referenciaacc_check CHECK ((nro_referenciaacc >= 0))
);
    DROP TABLE public.involucra;
       public         heap    postgres    false            ?            1259    26265    multa    TABLE     `  CREATE TABLE public.multa (
    nro_referenciamulta integer NOT NULL,
    fecha_multa date NOT NULL,
    lugar_multa character varying(45) NOT NULL,
    hora_multa time without time zone NOT NULL,
    importe real NOT NULL,
    matricula character varying(8) NOT NULL,
    puntajenivelgravedadacc integer NOT NULL,
    CONSTRAINT multa_importe_check CHECK ((importe >= (0)::double precision)),
    CONSTRAINT multa_nro_referenciamulta_check CHECK ((nro_referenciamulta >= 0)),
    CONSTRAINT multa_puntajenivelgravedadacc_check CHECK (((puntajenivelgravedadacc >= 1) AND (puntajenivelgravedadacc <= 10)))
);
    DROP TABLE public.multa;
       public         heap    postgres    false            ?            1259    26271 	   municipio    TABLE     "  CREATE TABLE public.municipio (
    id_municipio integer NOT NULL,
    nb_municipio character varying(45) NOT NULL,
    id_estado integer NOT NULL,
    CONSTRAINT municipio_id_estado_check CHECK ((id_estado >= 0)),
    CONSTRAINT municipio_id_municipio_check CHECK ((id_municipio >= 0))
);
    DROP TABLE public.municipio;
       public         heap    postgres    false            ?            1259    26276    pago    TABLE     o  CREATE TABLE public.pago (
    nropago integer NOT NULL,
    id_prestamo integer NOT NULL,
    fecha_pago date NOT NULL,
    importe_pago real NOT NULL,
    CONSTRAINT pago_id_prestamo_check CHECK ((id_prestamo >= 0)),
    CONSTRAINT pago_importe_pago_check CHECK ((importe_pago >= (0)::double precision)),
    CONSTRAINT pago_nropago_check CHECK ((nropago >= 0))
);
    DROP TABLE public.pago;
       public         heap    postgres    false            ?            1259    26282    pais    TABLE     ?   CREATE TABLE public.pais (
    id_pais integer NOT NULL,
    nb_pais character varying(45) NOT NULL,
    CONSTRAINT pais_id_pais_check CHECK ((id_pais >= 0))
);
    DROP TABLE public.pais;
       public         heap    postgres    false            ?            1259    26286 	   parroquia    TABLE     +  CREATE TABLE public.parroquia (
    id_parroquia integer NOT NULL,
    nb_parroquia character varying(45) NOT NULL,
    id_municipio integer NOT NULL,
    CONSTRAINT parroquia_id_municipio_check CHECK ((id_municipio >= 0)),
    CONSTRAINT parroquia_id_parroquia_check CHECK ((id_parroquia >= 0))
);
    DROP TABLE public.parroquia;
       public         heap    postgres    false            ?            1259    26291    perfil    TABLE     ?   CREATE TABLE public.perfil (
    id_perfil integer NOT NULL,
    nombre_perfil character varying(45) NOT NULL,
    CONSTRAINT perfil_id_perfil_check CHECK ((id_perfil >= 0))
);
    DROP TABLE public.perfil;
       public         heap    postgres    false            ?            1259    26295    persona    TABLE     `  CREATE TABLE public.persona (
    idpersona integer NOT NULL,
    ci integer NOT NULL,
    nombpersona character varying(45) NOT NULL,
    numtlfpersona character varying(15) NOT NULL,
    tipo_persona character varying(20) NOT NULL,
    CONSTRAINT persona_ci_check CHECK ((ci >= 0)),
    CONSTRAINT persona_idpersona_check CHECK ((idpersona >= 0))
);
    DROP TABLE public.persona;
       public         heap    postgres    false            ?            1259    26300    poliza    TABLE       CREATE TABLE public.poliza (
    nro_poliza integer NOT NULL,
    descrip_poliza character varying(45) NOT NULL,
    prima real NOT NULL,
    CONSTRAINT poliza_nro_poliza_check CHECK ((nro_poliza >= 0)),
    CONSTRAINT poliza_prima_check CHECK ((prima >= (0)::double precision))
);
    DROP TABLE public.poliza;
       public         heap    postgres    false            ?            1259    26305    posee    TABLE     ?   CREATE TABLE public.posee (
    idpersona integer NOT NULL,
    matricula character varying(8) NOT NULL,
    CONSTRAINT posee_idpersona_check CHECK ((idpersona >= 0))
);
    DROP TABLE public.posee;
       public         heap    postgres    false            ?            1259    26309    prestamo    TABLE       CREATE TABLE public.prestamo (
    id_prestamo integer NOT NULL,
    importe_prestamo real NOT NULL,
    CONSTRAINT prestamo_id_prestamo_check CHECK ((id_prestamo >= 0)),
    CONSTRAINT prestamo_importe_prestamo_check CHECK ((importe_prestamo >= (0)::double precision))
);
    DROP TABLE public.prestamo;
       public         heap    postgres    false            ?            1259    26314    prestatario    TABLE     ?  CREATE TABLE public.prestatario (
    id_prestamo integer NOT NULL,
    id_cliente integer NOT NULL,
    id_financiadora integer NOT NULL,
    tipo_interes real NOT NULL,
    CONSTRAINT prestatario_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT prestatario_id_financiadora_check CHECK ((id_financiadora >= 0)),
    CONSTRAINT prestatario_id_prestamo_check CHECK ((id_prestamo >= 0)),
    CONSTRAINT prestatario_tipo_interes_check CHECK ((tipo_interes >= (0)::double precision))
);
    DROP TABLE public.prestatario;
       public         heap    postgres    false            ?            1259    26321    registro_siniestro    TABLE     ?  CREATE TABLE public.registro_siniestro (
    nro_siniestro integer NOT NULL,
    nro_poliza integer NOT NULL,
    fecha_siniestro timestamp without time zone NOT NULL,
    fecha_respuesta date NOT NULL,
    id_rechazo character varying(2) NOT NULL,
    monto_reconocido real NOT NULL,
    monto_solicitado real NOT NULL,
    CONSTRAINT registro_siniestro_monto_reconocido_check CHECK ((monto_reconocido >= (0)::double precision)),
    CONSTRAINT registro_siniestro_monto_solicitado_check CHECK ((monto_solicitado >= (0)::double precision)),
    CONSTRAINT registro_siniestro_nro_poliza_check CHECK ((nro_poliza >= 0)),
    CONSTRAINT registro_siniestro_nro_siniestro_check CHECK ((nro_siniestro >= 0))
);
 &   DROP TABLE public.registro_siniestro;
       public         heap    postgres    false            ?            1259    26328    rol_usuario    TABLE     ?   CREATE TABLE public.rol_usuario (
    id_usuario integer NOT NULL,
    id_perfil integer NOT NULL,
    CONSTRAINT rol_usuario_id_perfil_check CHECK ((id_perfil >= 0)),
    CONSTRAINT rol_usuario_id_usuario_check CHECK ((id_usuario >= 0))
);
    DROP TABLE public.rol_usuario;
       public         heap    postgres    false            ?            1259    26333 	   siniestro    TABLE     ?   CREATE TABLE public.siniestro (
    nro_siniestro integer NOT NULL,
    descripcion_siniestro character varying(80) NOT NULL,
    CONSTRAINT siniestro_nro_siniestro_check CHECK ((nro_siniestro >= 0))
);
    DROP TABLE public.siniestro;
       public         heap    postgres    false            ?            1259    26337    sucursal    TABLE     ?  CREATE TABLE public.sucursal (
    id_sucursal integer NOT NULL,
    nb_sucursal character varying(45) NOT NULL,
    id_ciudad integer NOT NULL,
    activos real NOT NULL,
    iddirector integer NOT NULL,
    CONSTRAINT sucursal_activos_check CHECK ((activos >= (0)::double precision)),
    CONSTRAINT sucursal_id_ciudad_check CHECK ((id_ciudad >= 0)),
    CONSTRAINT sucursal_id_sucursal_check CHECK ((id_sucursal >= 0)),
    CONSTRAINT sucursal_iddirector_check CHECK ((iddirector >= 0))
);
    DROP TABLE public.sucursal;
       public         heap    postgres    false            ?            1259    26344    tipo_cobertura    TABLE     ?   CREATE TABLE public.tipo_cobertura (
    id_tipo_cobertura integer NOT NULL,
    descriptipocobertura character varying(45) NOT NULL,
    CONSTRAINT tipo_cobertura_id_tipo_cobertura_check CHECK ((id_tipo_cobertura >= 0))
);
 "   DROP TABLE public.tipo_cobertura;
       public         heap    postgres    false            ?            1259    26348    titular    TABLE     }  CREATE TABLE public.titular (
    id_cliente integer NOT NULL,
    nro_poliza integer NOT NULL,
    saldo_prima real NOT NULL,
    fecha_uso_reciente date,
    CONSTRAINT titular_id_cliente_check CHECK ((id_cliente >= 0)),
    CONSTRAINT titular_nro_poliza_check CHECK ((nro_poliza >= 0)),
    CONSTRAINT titular_saldo_prima_check CHECK ((saldo_prima >= (0)::double precision))
);
    DROP TABLE public.titular;
       public         heap    postgres    false            ?            1259    26354    trabaja    TABLE     ?  CREATE TABLE public.trabaja (
    idempleado integer NOT NULL,
    id_sucursal integer NOT NULL,
    id_banda integer NOT NULL,
    fecha_inicio_sucursal date NOT NULL,
    acumulado_salario real,
    CONSTRAINT trabaja_acumulado_salario_check CHECK ((acumulado_salario >= (0)::double precision)),
    CONSTRAINT trabaja_id_banda_check CHECK ((id_banda >= 0)),
    CONSTRAINT trabaja_id_sucursal_check CHECK ((id_sucursal >= 0)),
    CONSTRAINT trabaja_idempleado_check CHECK ((idempleado >= 0))
);
    DROP TABLE public.trabaja;
       public         heap    postgres    false            ?            1259    26361    usuario    TABLE     S  CREATE TABLE public.usuario (
    id_usuario integer NOT NULL,
    nombre_usuario character varying(45) NOT NULL,
    email character varying(45) NOT NULL,
    "contraseña" character varying(10) NOT NULL,
    nombre character varying(45) NOT NULL,
    apellido character varying(45) NOT NULL,
    edad integer NOT NULL,
    sexo character varying(3) NOT NULL,
    id_ciudad integer NOT NULL,
    CONSTRAINT usuario_edad_check CHECK (((edad > 0) AND (edad < 100))),
    CONSTRAINT usuario_email_check CHECK (((email)::text ~* '^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+[.][A-Za-z]+$'::text)),
    CONSTRAINT usuario_id_ciudad_check CHECK ((id_ciudad >= 0)),
    CONSTRAINT usuario_id_usuario_check CHECK ((id_usuario >= 0)),
    CONSTRAINT usuario_sexo_check CHECK ((((sexo)::text = 'M'::text) OR ((sexo)::text = 'F'::text) OR ((sexo)::text = 'N/A'::text)))
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            ?            1259    26369    vehiculo    TABLE     ?  CREATE TABLE public.vehiculo (
    matricula character varying(8) NOT NULL,
    modelo character varying(45) NOT NULL,
    annio character varying(45) NOT NULL,
    id_categoria integer NOT NULL,
    id_tipo_cobertura integer NOT NULL,
    marca character varying(45) NOT NULL,
    CONSTRAINT vehiculo_id_categoria_check CHECK ((id_categoria >= 0)),
    CONSTRAINT vehiculo_id_tipo_cobertura_check CHECK ((id_tipo_cobertura >= 0))
);
    DROP TABLE public.vehiculo;
       public         heap    postgres    false            ?            1259    26374    vida    TABLE     Y  CREATE TABLE public.vida (
    id_vida_salud integer NOT NULL,
    prima real NOT NULL,
    cobertura real NOT NULL,
    CONSTRAINT vida_cobertura_check CHECK ((cobertura >= (0)::double precision)),
    CONSTRAINT vida_id_vida_salud_check CHECK ((id_vida_salud >= 0)),
    CONSTRAINT vida_prima_check CHECK ((prima >= (0)::double precision))
);
    DROP TABLE public.vida;
       public         heap    postgres    false            R          0    26181 	   accidente 
   TABLE DATA           d   COPY public.accidente (nro_referenciaacc, fecha_acc, lugar_acc, hora_acc, id_categoria) FROM stdin;
    public          postgres    false    210   ??       S          0    26186    agente 
   TABLE DATA           F   COPY public.agente (id_agente, direc_agente, tipo_agente) FROM stdin;
    public          postgres    false    211   ??       T          0    26190    banda_salarial 
   TABLE DATA           H   COPY public.banda_salarial (id_banda, banda_min, banda_max) FROM stdin;
    public          postgres    false    212   G?       U          0    26200    categoria_accidente 
   TABLE DATA           ^   COPY public.categoria_accidente (id_categoria, descripcateg, descripsubcategoria) FROM stdin;
    public          postgres    false    213   w?       V          0    26204    categoria_vehiculo 
   TABLE DATA           H   COPY public.categoria_vehiculo (id_categoria, descripcateg) FROM stdin;
    public          postgres    false    214   4?       W          0    26208    ciudad 
   TABLE DATA           D   COPY public.ciudad (id_ciudad, nb_ciudad, id_municipio) FROM stdin;
    public          postgres    false    215   X?       X          0    26213    cliente 
   TABLE DATA           ?   COPY public.cliente (id_cliente, apellido_cliente, nombre_cliente, direc_cliente, calle, ciudad, genero, fecha_nac, id_sucursal) FROM stdin;
    public          postgres    false    216   ??       Y          0    26219    contrata_inmueble 
   TABLE DATA           ?   COPY public.contrata_inmueble (id_inmueble, id_cliente, id_agente, fecha_contrato, estado_contrato, monto_comision_ag) FROM stdin;
    public          postgres    false    217   ??       Z          0    26226    contrata_vehiculo 
   TABLE DATA           ?   COPY public.contrata_vehiculo (id_cliente, id_agente, matricula, fecha_contrato, recargo, descuentos, estado_contrato, monto_comision_ag) FROM stdin;
    public          postgres    false    218   ?       [          0    26234    contrata_vida 
   TABLE DATA           ?   COPY public.contrata_vida (id_vida, id_cliente, idpersona, id_agente, fecha_contrato, estado_contrato, monto_comision_ag) FROM stdin;
    public          postgres    false    219   [?       \          0    26242    empleado 
   TABLE DATA           E   COPY public.empleado (id_empleado, fecha_inicio_empresa) FROM stdin;
    public          postgres    false    220   ??       ]          0    26246    estado 
   TABLE DATA           ?   COPY public.estado (id_estado, nb_estado, id_pais) FROM stdin;
    public          postgres    false    221   ??       ^          0    26251    financiadora 
   TABLE DATA           V   COPY public.financiadora (id_financiadora, direc_financ, tlffinanciadora) FROM stdin;
    public          postgres    false    222   -?       _          0    26255    inmueble 
   TABLE DATA           d   COPY public.inmueble (id_inmueble, direcinmueble, valor, contenido, riesgos_auxiliares) FROM stdin;
    public          postgres    false    223   J?       `          0    26260 	   involucra 
   TABLE DATA           L   COPY public.involucra (nro_referenciaacc, matricula, idpersona) FROM stdin;
    public          postgres    false    224   ??       a          0    26265    multa 
   TABLE DATA           ?   COPY public.multa (nro_referenciamulta, fecha_multa, lugar_multa, hora_multa, importe, matricula, puntajenivelgravedadacc) FROM stdin;
    public          postgres    false    225   $?       b          0    26271 	   municipio 
   TABLE DATA           J   COPY public.municipio (id_municipio, nb_municipio, id_estado) FROM stdin;
    public          postgres    false    226   A?       c          0    26276    pago 
   TABLE DATA           N   COPY public.pago (nropago, id_prestamo, fecha_pago, importe_pago) FROM stdin;
    public          postgres    false    227   ??       d          0    26282    pais 
   TABLE DATA           0   COPY public.pais (id_pais, nb_pais) FROM stdin;
    public          postgres    false    228   ??       e          0    26286 	   parroquia 
   TABLE DATA           M   COPY public.parroquia (id_parroquia, nb_parroquia, id_municipio) FROM stdin;
    public          postgres    false    229   ?       f          0    26291    perfil 
   TABLE DATA           :   COPY public.perfil (id_perfil, nombre_perfil) FROM stdin;
    public          postgres    false    230   ??       g          0    26295    persona 
   TABLE DATA           Z   COPY public.persona (idpersona, ci, nombpersona, numtlfpersona, tipo_persona) FROM stdin;
    public          postgres    false    231   ?       h          0    26300    poliza 
   TABLE DATA           C   COPY public.poliza (nro_poliza, descrip_poliza, prima) FROM stdin;
    public          postgres    false    232   ??       i          0    26305    posee 
   TABLE DATA           5   COPY public.posee (idpersona, matricula) FROM stdin;
    public          postgres    false    233   >?       j          0    26309    prestamo 
   TABLE DATA           A   COPY public.prestamo (id_prestamo, importe_prestamo) FROM stdin;
    public          postgres    false    234   p?       k          0    26314    prestatario 
   TABLE DATA           ]   COPY public.prestatario (id_prestamo, id_cliente, id_financiadora, tipo_interes) FROM stdin;
    public          postgres    false    235   ??       l          0    26321    registro_siniestro 
   TABLE DATA           ?   COPY public.registro_siniestro (nro_siniestro, nro_poliza, fecha_siniestro, fecha_respuesta, id_rechazo, monto_reconocido, monto_solicitado) FROM stdin;
    public          postgres    false    236   ??       m          0    26328    rol_usuario 
   TABLE DATA           <   COPY public.rol_usuario (id_usuario, id_perfil) FROM stdin;
    public          postgres    false    237   ??       n          0    26333 	   siniestro 
   TABLE DATA           I   COPY public.siniestro (nro_siniestro, descripcion_siniestro) FROM stdin;
    public          postgres    false    238   ?       o          0    26337    sucursal 
   TABLE DATA           \   COPY public.sucursal (id_sucursal, nb_sucursal, id_ciudad, activos, iddirector) FROM stdin;
    public          postgres    false    239   A?       p          0    26344    tipo_cobertura 
   TABLE DATA           Q   COPY public.tipo_cobertura (id_tipo_cobertura, descriptipocobertura) FROM stdin;
    public          postgres    false    240   ??       q          0    26348    titular 
   TABLE DATA           Z   COPY public.titular (id_cliente, nro_poliza, saldo_prima, fecha_uso_reciente) FROM stdin;
    public          postgres    false    241   ??       r          0    26354    trabaja 
   TABLE DATA           n   COPY public.trabaja (idempleado, id_sucursal, id_banda, fecha_inicio_sucursal, acumulado_salario) FROM stdin;
    public          postgres    false    242   ?       s          0    26361    usuario 
   TABLE DATA           |   COPY public.usuario (id_usuario, nombre_usuario, email, "contraseña", nombre, apellido, edad, sexo, id_ciudad) FROM stdin;
    public          postgres    false    243   L?       t          0    26369    vehiculo 
   TABLE DATA           d   COPY public.vehiculo (matricula, modelo, annio, id_categoria, id_tipo_cobertura, marca) FROM stdin;
    public          postgres    false    244   k?       u          0    26374    vida 
   TABLE DATA           ?   COPY public.vida (id_vida_salud, prima, cobertura) FROM stdin;
    public          postgres    false    245   ??       @           2606    26381    accidente accidente_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.accidente
    ADD CONSTRAINT accidente_pkey PRIMARY KEY (nro_referenciaacc);
 B   ALTER TABLE ONLY public.accidente DROP CONSTRAINT accidente_pkey;
       public            postgres    false    210            B           2606    26383    agente agente_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.agente
    ADD CONSTRAINT agente_pkey PRIMARY KEY (id_agente);
 <   ALTER TABLE ONLY public.agente DROP CONSTRAINT agente_pkey;
       public            postgres    false    211            D           2606    26385 "   banda_salarial banda_salarial_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.banda_salarial
    ADD CONSTRAINT banda_salarial_pkey PRIMARY KEY (id_banda);
 L   ALTER TABLE ONLY public.banda_salarial DROP CONSTRAINT banda_salarial_pkey;
       public            postgres    false    212            F           2606    26391 ,   categoria_accidente categoria_accidente_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.categoria_accidente
    ADD CONSTRAINT categoria_accidente_pkey PRIMARY KEY (id_categoria);
 V   ALTER TABLE ONLY public.categoria_accidente DROP CONSTRAINT categoria_accidente_pkey;
       public            postgres    false    213            H           2606    26393 *   categoria_vehiculo categoria_vehiculo_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.categoria_vehiculo
    ADD CONSTRAINT categoria_vehiculo_pkey PRIMARY KEY (id_categoria);
 T   ALTER TABLE ONLY public.categoria_vehiculo DROP CONSTRAINT categoria_vehiculo_pkey;
       public            postgres    false    214            J           2606    26395    ciudad ciudad_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.ciudad
    ADD CONSTRAINT ciudad_pkey PRIMARY KEY (id_ciudad);
 <   ALTER TABLE ONLY public.ciudad DROP CONSTRAINT ciudad_pkey;
       public            postgres    false    215            L           2606    26397    cliente cliente_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id_cliente);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public            postgres    false    216            N           2606    26403 (   contrata_inmueble contrata_inmueble_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_inmueble
    ADD CONSTRAINT contrata_inmueble_pkey PRIMARY KEY (id_inmueble, id_cliente, id_agente, fecha_contrato);
 R   ALTER TABLE ONLY public.contrata_inmueble DROP CONSTRAINT contrata_inmueble_pkey;
       public            postgres    false    217    217    217    217            P           2606    26409 (   contrata_vehiculo contrata_vehiculo_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vehiculo
    ADD CONSTRAINT contrata_vehiculo_pkey PRIMARY KEY (id_cliente, id_agente, matricula, fecha_contrato);
 R   ALTER TABLE ONLY public.contrata_vehiculo DROP CONSTRAINT contrata_vehiculo_pkey;
       public            postgres    false    218    218    218    218            R           2606    26413     contrata_vida contrata_vida_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vida
    ADD CONSTRAINT contrata_vida_pkey PRIMARY KEY (id_vida, id_cliente, idpersona, id_agente, fecha_contrato);
 J   ALTER TABLE ONLY public.contrata_vida DROP CONSTRAINT contrata_vida_pkey;
       public            postgres    false    219    219    219    219    219            T           2606    26415    empleado empleado_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT empleado_pkey PRIMARY KEY (id_empleado);
 @   ALTER TABLE ONLY public.empleado DROP CONSTRAINT empleado_pkey;
       public            postgres    false    220            V           2606    26417    estado estado_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.estado
    ADD CONSTRAINT estado_pkey PRIMARY KEY (id_estado);
 <   ALTER TABLE ONLY public.estado DROP CONSTRAINT estado_pkey;
       public            postgres    false    221            X           2606    26419    financiadora financiadora_pkey 
   CONSTRAINT     i   ALTER TABLE ONLY public.financiadora
    ADD CONSTRAINT financiadora_pkey PRIMARY KEY (id_financiadora);
 H   ALTER TABLE ONLY public.financiadora DROP CONSTRAINT financiadora_pkey;
       public            postgres    false    222            Z           2606    26421    inmueble inmueble_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.inmueble
    ADD CONSTRAINT inmueble_pkey PRIMARY KEY (id_inmueble);
 @   ALTER TABLE ONLY public.inmueble DROP CONSTRAINT inmueble_pkey;
       public            postgres    false    223            \           2606    26425    involucra involucra_pkey 
   CONSTRAINT     {   ALTER TABLE ONLY public.involucra
    ADD CONSTRAINT involucra_pkey PRIMARY KEY (nro_referenciaacc, matricula, idpersona);
 B   ALTER TABLE ONLY public.involucra DROP CONSTRAINT involucra_pkey;
       public            postgres    false    224    224    224            ^           2606    26427    multa multa_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.multa
    ADD CONSTRAINT multa_pkey PRIMARY KEY (nro_referenciamulta);
 :   ALTER TABLE ONLY public.multa DROP CONSTRAINT multa_pkey;
       public            postgres    false    225            `           2606    26429    municipio municipio_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (id_municipio);
 B   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_pkey;
       public            postgres    false    226            b           2606    26431    pago pago_id_prestamo_key 
   CONSTRAINT     [   ALTER TABLE ONLY public.pago
    ADD CONSTRAINT pago_id_prestamo_key UNIQUE (id_prestamo);
 C   ALTER TABLE ONLY public.pago DROP CONSTRAINT pago_id_prestamo_key;
       public            postgres    false    227            d           2606    26433    pago pago_nropago_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.pago
    ADD CONSTRAINT pago_nropago_key UNIQUE (nropago);
 ?   ALTER TABLE ONLY public.pago DROP CONSTRAINT pago_nropago_key;
       public            postgres    false    227            f           2606    26435    pago pago_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.pago
    ADD CONSTRAINT pago_pkey PRIMARY KEY (nropago, id_prestamo);
 8   ALTER TABLE ONLY public.pago DROP CONSTRAINT pago_pkey;
       public            postgres    false    227    227            h           2606    26437    pais pais_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.pais
    ADD CONSTRAINT pais_pkey PRIMARY KEY (id_pais);
 8   ALTER TABLE ONLY public.pais DROP CONSTRAINT pais_pkey;
       public            postgres    false    228            j           2606    26439    parroquia parroquia_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.parroquia
    ADD CONSTRAINT parroquia_pkey PRIMARY KEY (id_parroquia);
 B   ALTER TABLE ONLY public.parroquia DROP CONSTRAINT parroquia_pkey;
       public            postgres    false    229            l           2606    26441    perfil perfil_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.perfil
    ADD CONSTRAINT perfil_pkey PRIMARY KEY (id_perfil);
 <   ALTER TABLE ONLY public.perfil DROP CONSTRAINT perfil_pkey;
       public            postgres    false    230            n           2606    26443    persona persona_ci_key 
   CONSTRAINT     O   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_ci_key UNIQUE (ci);
 @   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_ci_key;
       public            postgres    false    231            p           2606    26445    persona persona_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (idpersona);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public            postgres    false    231            r           2606    26447    poliza poliza_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.poliza
    ADD CONSTRAINT poliza_pkey PRIMARY KEY (nro_poliza);
 <   ALTER TABLE ONLY public.poliza DROP CONSTRAINT poliza_pkey;
       public            postgres    false    232            t           2606    26453    posee posee_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.posee
    ADD CONSTRAINT posee_pkey PRIMARY KEY (idpersona, matricula);
 :   ALTER TABLE ONLY public.posee DROP CONSTRAINT posee_pkey;
       public            postgres    false    233    233            v           2606    26455    prestamo prestamo_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.prestamo
    ADD CONSTRAINT prestamo_pkey PRIMARY KEY (id_prestamo);
 @   ALTER TABLE ONLY public.prestamo DROP CONSTRAINT prestamo_pkey;
       public            postgres    false    234            x           2606    26457 '   prestatario prestatario_id_prestamo_key 
   CONSTRAINT     i   ALTER TABLE ONLY public.prestatario
    ADD CONSTRAINT prestatario_id_prestamo_key UNIQUE (id_prestamo);
 Q   ALTER TABLE ONLY public.prestatario DROP CONSTRAINT prestatario_id_prestamo_key;
       public            postgres    false    235            z           2606    26459    prestatario prestatario_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.prestatario
    ADD CONSTRAINT prestatario_pkey PRIMARY KEY (id_prestamo, id_cliente, id_financiadora);
 F   ALTER TABLE ONLY public.prestatario DROP CONSTRAINT prestatario_pkey;
       public            postgres    false    235    235    235            |           2606    26465 7   registro_siniestro registro_siniestro_nro_siniestro_key 
   CONSTRAINT     {   ALTER TABLE ONLY public.registro_siniestro
    ADD CONSTRAINT registro_siniestro_nro_siniestro_key UNIQUE (nro_siniestro);
 a   ALTER TABLE ONLY public.registro_siniestro DROP CONSTRAINT registro_siniestro_nro_siniestro_key;
       public            postgres    false    236            ~           2606    26467 *   registro_siniestro registro_siniestro_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.registro_siniestro
    ADD CONSTRAINT registro_siniestro_pkey PRIMARY KEY (nro_siniestro, nro_poliza, fecha_siniestro);
 T   ALTER TABLE ONLY public.registro_siniestro DROP CONSTRAINT registro_siniestro_pkey;
       public            postgres    false    236    236    236            ?           2606    26469 %   rol_usuario rol_usuario_id_perfil_key 
   CONSTRAINT     e   ALTER TABLE ONLY public.rol_usuario
    ADD CONSTRAINT rol_usuario_id_perfil_key UNIQUE (id_perfil);
 O   ALTER TABLE ONLY public.rol_usuario DROP CONSTRAINT rol_usuario_id_perfil_key;
       public            postgres    false    237            ?           2606    26471 &   rol_usuario rol_usuario_id_usuario_key 
   CONSTRAINT     g   ALTER TABLE ONLY public.rol_usuario
    ADD CONSTRAINT rol_usuario_id_usuario_key UNIQUE (id_usuario);
 P   ALTER TABLE ONLY public.rol_usuario DROP CONSTRAINT rol_usuario_id_usuario_key;
       public            postgres    false    237            ?           2606    26473    rol_usuario rol_usuario_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.rol_usuario
    ADD CONSTRAINT rol_usuario_pkey PRIMARY KEY (id_usuario, id_perfil);
 F   ALTER TABLE ONLY public.rol_usuario DROP CONSTRAINT rol_usuario_pkey;
       public            postgres    false    237    237            ?           2606    26475    siniestro siniestro_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.siniestro
    ADD CONSTRAINT siniestro_pkey PRIMARY KEY (nro_siniestro);
 B   ALTER TABLE ONLY public.siniestro DROP CONSTRAINT siniestro_pkey;
       public            postgres    false    238            ?           2606    26477     sucursal sucursal_iddirector_key 
   CONSTRAINT     a   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT sucursal_iddirector_key UNIQUE (iddirector);
 J   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT sucursal_iddirector_key;
       public            postgres    false    239            ?           2606    26479    sucursal sucursal_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT sucursal_pkey PRIMARY KEY (id_sucursal);
 @   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT sucursal_pkey;
       public            postgres    false    239            ?           2606    26481 "   tipo_cobertura tipo_cobertura_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.tipo_cobertura
    ADD CONSTRAINT tipo_cobertura_pkey PRIMARY KEY (id_tipo_cobertura);
 L   ALTER TABLE ONLY public.tipo_cobertura DROP CONSTRAINT tipo_cobertura_pkey;
       public            postgres    false    240            ?           2606    26485    titular titular_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.titular
    ADD CONSTRAINT titular_pkey PRIMARY KEY (id_cliente, nro_poliza);
 >   ALTER TABLE ONLY public.titular DROP CONSTRAINT titular_pkey;
       public            postgres    false    241    241            ?           2606    26487    trabaja trabaja_idempleado_key 
   CONSTRAINT     _   ALTER TABLE ONLY public.trabaja
    ADD CONSTRAINT trabaja_idempleado_key UNIQUE (idempleado);
 H   ALTER TABLE ONLY public.trabaja DROP CONSTRAINT trabaja_idempleado_key;
       public            postgres    false    242            ?           2606    26489    trabaja trabaja_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.trabaja
    ADD CONSTRAINT trabaja_pkey PRIMARY KEY (idempleado, id_sucursal, id_banda);
 >   ALTER TABLE ONLY public.trabaja DROP CONSTRAINT trabaja_pkey;
       public            postgres    false    242    242    242            ?           2606    26491    usuario usuario_email_key 
   CONSTRAINT     U   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);
 C   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_email_key;
       public            postgres    false    243            ?           2606    26493 "   usuario usuario_nombre_usuario_key 
   CONSTRAINT     g   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_nombre_usuario_key UNIQUE (nombre_usuario);
 L   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_nombre_usuario_key;
       public            postgres    false    243            ?           2606    26495    usuario usuario_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    243            ?           2606    26497    vehiculo vehiculo_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.vehiculo
    ADD CONSTRAINT vehiculo_pkey PRIMARY KEY (matricula);
 @   ALTER TABLE ONLY public.vehiculo DROP CONSTRAINT vehiculo_pkey;
       public            postgres    false    244            ?           2606    26499    vida vida_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.vida
    ADD CONSTRAINT vida_pkey PRIMARY KEY (id_vida_salud);
 8   ALTER TABLE ONLY public.vida DROP CONSTRAINT vida_pkey;
       public            postgres    false    245            ?           2606    26500    agente id_agente    FK CONSTRAINT     z   ALTER TABLE ONLY public.agente
    ADD CONSTRAINT id_agente FOREIGN KEY (id_agente) REFERENCES public.persona(idpersona);
 :   ALTER TABLE ONLY public.agente DROP CONSTRAINT id_agente;
       public          postgres    false    3440    231    211            ?           2606    26505 $   contrata_inmueble id_agente_inmueble    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_inmueble
    ADD CONSTRAINT id_agente_inmueble FOREIGN KEY (id_agente) REFERENCES public.agente(id_agente);
 N   ALTER TABLE ONLY public.contrata_inmueble DROP CONSTRAINT id_agente_inmueble;
       public          postgres    false    217    3394    211            ?           2606    26510 $   contrata_vehiculo id_agente_vehiculo    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vehiculo
    ADD CONSTRAINT id_agente_vehiculo FOREIGN KEY (id_agente) REFERENCES public.agente(id_agente);
 N   ALTER TABLE ONLY public.contrata_vehiculo DROP CONSTRAINT id_agente_vehiculo;
       public          postgres    false    211    3394    218            ?           2606    26515    contrata_vida id_agente_vida    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vida
    ADD CONSTRAINT id_agente_vida FOREIGN KEY (id_agente) REFERENCES public.agente(id_agente);
 F   ALTER TABLE ONLY public.contrata_vida DROP CONSTRAINT id_agente_vida;
       public          postgres    false    3394    211    219            ?           2606    26520    trabaja id_banda    FK CONSTRAINT        ALTER TABLE ONLY public.trabaja
    ADD CONSTRAINT id_banda FOREIGN KEY (id_banda) REFERENCES public.banda_salarial(id_banda);
 :   ALTER TABLE ONLY public.trabaja DROP CONSTRAINT id_banda;
       public          postgres    false    242    3396    212            ?           2606    26530    vehiculo id_categoria    FK CONSTRAINT     ?   ALTER TABLE ONLY public.vehiculo
    ADD CONSTRAINT id_categoria FOREIGN KEY (id_categoria) REFERENCES public.categoria_vehiculo(id_categoria);
 ?   ALTER TABLE ONLY public.vehiculo DROP CONSTRAINT id_categoria;
       public          postgres    false    214    3400    244            ?           2606    26535    accidente id_categoria_acc    FK CONSTRAINT     ?   ALTER TABLE ONLY public.accidente
    ADD CONSTRAINT id_categoria_acc FOREIGN KEY (id_categoria) REFERENCES public.categoria_accidente(id_categoria);
 D   ALTER TABLE ONLY public.accidente DROP CONSTRAINT id_categoria_acc;
       public          postgres    false    3398    213    210            ?           2606    26540    usuario id_ciudad    FK CONSTRAINT     z   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT id_ciudad FOREIGN KEY (id_ciudad) REFERENCES public.ciudad(id_ciudad);
 ;   ALTER TABLE ONLY public.usuario DROP CONSTRAINT id_ciudad;
       public          postgres    false    243    3402    215            ?           2606    26545    sucursal id_ciudad_sucursal    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT id_ciudad_sucursal FOREIGN KEY (id_ciudad) REFERENCES public.ciudad(id_ciudad);
 E   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT id_ciudad_sucursal;
       public          postgres    false    239    3402    215            ?           2606    26550    cliente id_cliente    FK CONSTRAINT     }   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT id_cliente FOREIGN KEY (id_cliente) REFERENCES public.persona(idpersona);
 <   ALTER TABLE ONLY public.cliente DROP CONSTRAINT id_cliente;
       public          postgres    false    216    3440    231            ?           2606    26555 %   contrata_inmueble id_cliente_inmueble    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_inmueble
    ADD CONSTRAINT id_cliente_inmueble FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);
 O   ALTER TABLE ONLY public.contrata_inmueble DROP CONSTRAINT id_cliente_inmueble;
       public          postgres    false    216    3404    217            ?           2606    26560    prestatario id_cliente_pr    FK CONSTRAINT     ?   ALTER TABLE ONLY public.prestatario
    ADD CONSTRAINT id_cliente_pr FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);
 C   ALTER TABLE ONLY public.prestatario DROP CONSTRAINT id_cliente_pr;
       public          postgres    false    235    3404    216            ?           2606    26565    titular id_cliente_titular    FK CONSTRAINT     ?   ALTER TABLE ONLY public.titular
    ADD CONSTRAINT id_cliente_titular FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);
 D   ALTER TABLE ONLY public.titular DROP CONSTRAINT id_cliente_titular;
       public          postgres    false    241    216    3404            ?           2606    26570 %   contrata_vehiculo id_cliente_vehiculo    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vehiculo
    ADD CONSTRAINT id_cliente_vehiculo FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);
 O   ALTER TABLE ONLY public.contrata_vehiculo DROP CONSTRAINT id_cliente_vehiculo;
       public          postgres    false    218    216    3404            ?           2606    26575    contrata_vida id_cliente_vida    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vida
    ADD CONSTRAINT id_cliente_vida FOREIGN KEY (id_cliente) REFERENCES public.cliente(id_cliente);
 G   ALTER TABLE ONLY public.contrata_vida DROP CONSTRAINT id_cliente_vida;
       public          postgres    false    3404    219    216            ?           2606    26580    sucursal id_director    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT id_director FOREIGN KEY (iddirector) REFERENCES public.empleado(id_empleado);
 >   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT id_director;
       public          postgres    false    3412    239    220            ?           2606    26585    empleado id_empleado    FK CONSTRAINT     ?   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT id_empleado FOREIGN KEY (id_empleado) REFERENCES public.persona(idpersona);
 >   ALTER TABLE ONLY public.empleado DROP CONSTRAINT id_empleado;
       public          postgres    false    220    231    3440            ?           2606    26590    municipio id_estado    FK CONSTRAINT     |   ALTER TABLE ONLY public.municipio
    ADD CONSTRAINT id_estado FOREIGN KEY (id_estado) REFERENCES public.estado(id_estado);
 =   ALTER TABLE ONLY public.municipio DROP CONSTRAINT id_estado;
       public          postgres    false    221    3414    226            ?           2606    26595    prestatario id_financiadora_pr    FK CONSTRAINT     ?   ALTER TABLE ONLY public.prestatario
    ADD CONSTRAINT id_financiadora_pr FOREIGN KEY (id_financiadora) REFERENCES public.financiadora(id_financiadora);
 H   ALTER TABLE ONLY public.prestatario DROP CONSTRAINT id_financiadora_pr;
       public          postgres    false    3416    235    222            ?           2606    26600 &   contrata_inmueble id_inmueble_inmueble    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_inmueble
    ADD CONSTRAINT id_inmueble_inmueble FOREIGN KEY (id_inmueble) REFERENCES public.inmueble(id_inmueble);
 P   ALTER TABLE ONLY public.contrata_inmueble DROP CONSTRAINT id_inmueble_inmueble;
       public          postgres    false    223    217    3418            ?           2606    26605    ciudad id_municipio    FK CONSTRAINT     ?   ALTER TABLE ONLY public.ciudad
    ADD CONSTRAINT id_municipio FOREIGN KEY (id_municipio) REFERENCES public.municipio(id_municipio);
 =   ALTER TABLE ONLY public.ciudad DROP CONSTRAINT id_municipio;
       public          postgres    false    215    3424    226            ?           2606    26610     parroquia id_municipio_parroquia    FK CONSTRAINT     ?   ALTER TABLE ONLY public.parroquia
    ADD CONSTRAINT id_municipio_parroquia FOREIGN KEY (id_municipio) REFERENCES public.municipio(id_municipio);
 J   ALTER TABLE ONLY public.parroquia DROP CONSTRAINT id_municipio_parroquia;
       public          postgres    false    226    229    3424            ?           2606    26615    estado id_pais    FK CONSTRAINT     q   ALTER TABLE ONLY public.estado
    ADD CONSTRAINT id_pais FOREIGN KEY (id_pais) REFERENCES public.pais(id_pais);
 8   ALTER TABLE ONLY public.estado DROP CONSTRAINT id_pais;
       public          postgres    false    228    3432    221            ?           2606    26620    rol_usuario id_perfil    FK CONSTRAINT     ~   ALTER TABLE ONLY public.rol_usuario
    ADD CONSTRAINT id_perfil FOREIGN KEY (id_perfil) REFERENCES public.perfil(id_perfil);
 ?   ALTER TABLE ONLY public.rol_usuario DROP CONSTRAINT id_perfil;
       public          postgres    false    237    230    3436            ?           2606    26625    pago id_prestamo    FK CONSTRAINT        ALTER TABLE ONLY public.pago
    ADD CONSTRAINT id_prestamo FOREIGN KEY (id_prestamo) REFERENCES public.prestamo(id_prestamo);
 :   ALTER TABLE ONLY public.pago DROP CONSTRAINT id_prestamo;
       public          postgres    false    234    227    3446            ?           2606    26630    prestatario id_prestamo_pr    FK CONSTRAINT     ?   ALTER TABLE ONLY public.prestatario
    ADD CONSTRAINT id_prestamo_pr FOREIGN KEY (id_prestamo) REFERENCES public.prestamo(id_prestamo);
 D   ALTER TABLE ONLY public.prestatario DROP CONSTRAINT id_prestamo_pr;
       public          postgres    false    235    3446    234            ?           2606    26635    cliente id_sucursal_cliente    FK CONSTRAINT     ?   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT id_sucursal_cliente FOREIGN KEY (id_sucursal) REFERENCES public.sucursal(id_sucursal);
 E   ALTER TABLE ONLY public.cliente DROP CONSTRAINT id_sucursal_cliente;
       public          postgres    false    3466    239    216            ?           2606    26640    trabaja id_sucursal_trabaja    FK CONSTRAINT     ?   ALTER TABLE ONLY public.trabaja
    ADD CONSTRAINT id_sucursal_trabaja FOREIGN KEY (id_sucursal) REFERENCES public.sucursal(id_sucursal);
 E   ALTER TABLE ONLY public.trabaja DROP CONSTRAINT id_sucursal_trabaja;
       public          postgres    false    239    242    3466            ?           2606    26645    vehiculo id_tipo_cobertura    FK CONSTRAINT     ?   ALTER TABLE ONLY public.vehiculo
    ADD CONSTRAINT id_tipo_cobertura FOREIGN KEY (id_tipo_cobertura) REFERENCES public.tipo_cobertura(id_tipo_cobertura);
 D   ALTER TABLE ONLY public.vehiculo DROP CONSTRAINT id_tipo_cobertura;
       public          postgres    false    244    3468    240            ?           2606    26650    rol_usuario id_usuario    FK CONSTRAINT     ?   ALTER TABLE ONLY public.rol_usuario
    ADD CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES public.usuario(id_usuario);
 @   ALTER TABLE ONLY public.rol_usuario DROP CONSTRAINT id_usuario;
       public          postgres    false    243    3480    237            ?           2606    26655    trabaja idempleado    FK CONSTRAINT     ?   ALTER TABLE ONLY public.trabaja
    ADD CONSTRAINT idempleado FOREIGN KEY (idempleado) REFERENCES public.empleado(id_empleado);
 <   ALTER TABLE ONLY public.trabaja DROP CONSTRAINT idempleado;
       public          postgres    false    220    242    3412            ?           2606    26660    involucra idpersona_involucra    FK CONSTRAINT     ?   ALTER TABLE ONLY public.involucra
    ADD CONSTRAINT idpersona_involucra FOREIGN KEY (idpersona) REFERENCES public.persona(idpersona);
 G   ALTER TABLE ONLY public.involucra DROP CONSTRAINT idpersona_involucra;
       public          postgres    false    224    3440    231            ?           2606    26665    posee idpersona_posee    FK CONSTRAINT        ALTER TABLE ONLY public.posee
    ADD CONSTRAINT idpersona_posee FOREIGN KEY (idpersona) REFERENCES public.persona(idpersona);
 ?   ALTER TABLE ONLY public.posee DROP CONSTRAINT idpersona_posee;
       public          postgres    false    233    3440    231            ?           2606    26670    contrata_vida idpersona_vida    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vida
    ADD CONSTRAINT idpersona_vida FOREIGN KEY (idpersona) REFERENCES public.persona(idpersona);
 F   ALTER TABLE ONLY public.contrata_vida DROP CONSTRAINT idpersona_vida;
       public          postgres    false    3440    231    219            ?           2606    26675    multa matricula    FK CONSTRAINT     z   ALTER TABLE ONLY public.multa
    ADD CONSTRAINT matricula FOREIGN KEY (matricula) REFERENCES public.vehiculo(matricula);
 9   ALTER TABLE ONLY public.multa DROP CONSTRAINT matricula;
       public          postgres    false    244    225    3482            ?           2606    26680    involucra matricula_involucra    FK CONSTRAINT     ?   ALTER TABLE ONLY public.involucra
    ADD CONSTRAINT matricula_involucra FOREIGN KEY (matricula) REFERENCES public.vehiculo(matricula);
 G   ALTER TABLE ONLY public.involucra DROP CONSTRAINT matricula_involucra;
       public          postgres    false    244    224    3482            ?           2606    26685    posee matricula_posee    FK CONSTRAINT     ?   ALTER TABLE ONLY public.posee
    ADD CONSTRAINT matricula_posee FOREIGN KEY (matricula) REFERENCES public.vehiculo(matricula);
 ?   ALTER TABLE ONLY public.posee DROP CONSTRAINT matricula_posee;
       public          postgres    false    233    244    3482            ?           2606    26690 $   contrata_vehiculo matricula_vehiculo    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contrata_vehiculo
    ADD CONSTRAINT matricula_vehiculo FOREIGN KEY (matricula) REFERENCES public.vehiculo(matricula);
 N   ALTER TABLE ONLY public.contrata_vehiculo DROP CONSTRAINT matricula_vehiculo;
       public          postgres    false    218    3482    244            ?           2606    26695    titular nro_poliza    FK CONSTRAINT     }   ALTER TABLE ONLY public.titular
    ADD CONSTRAINT nro_poliza FOREIGN KEY (nro_poliza) REFERENCES public.poliza(nro_poliza);
 <   ALTER TABLE ONLY public.titular DROP CONSTRAINT nro_poliza;
       public          postgres    false    232    241    3442            ?           2606    26700 '   registro_siniestro nro_poliza_siniestro    FK CONSTRAINT     ?   ALTER TABLE ONLY public.registro_siniestro
    ADD CONSTRAINT nro_poliza_siniestro FOREIGN KEY (nro_poliza) REFERENCES public.poliza(nro_poliza);
 Q   ALTER TABLE ONLY public.registro_siniestro DROP CONSTRAINT nro_poliza_siniestro;
       public          postgres    false    236    232    3442            ?           2606    26705    involucra nro_referenciaacc    FK CONSTRAINT     ?   ALTER TABLE ONLY public.involucra
    ADD CONSTRAINT nro_referenciaacc FOREIGN KEY (nro_referenciaacc) REFERENCES public.accidente(nro_referenciaacc);
 E   ALTER TABLE ONLY public.involucra DROP CONSTRAINT nro_referenciaacc;
       public          postgres    false    210    3392    224            ?           2606    26710     registro_siniestro nro_siniestro    FK CONSTRAINT     ?   ALTER TABLE ONLY public.registro_siniestro
    ADD CONSTRAINT nro_siniestro FOREIGN KEY (nro_siniestro) REFERENCES public.siniestro(nro_siniestro);
 J   ALTER TABLE ONLY public.registro_siniestro DROP CONSTRAINT nro_siniestro;
       public          postgres    false    3462    238    236            R   -   x?3?4202?5 "sN?Ģ???̤|NC+ ?42?????? ?ii      S   b   x?3???,J?KI?Q(JL?/VHI?Qp-.I?tLO?+I??S?K????8?sR??3A?S?Rs?????1?s:'%&'?(8?'g`1,F??? a?)      T       x?3?440?4420?2??2͌??=... 9??      U   ?  x???MN?0???)rT'?²?HT	$Ċ??Z#???7b??#?bL?6n,?Α?????	̈́?9j?.A??JVf	v4?޼KB???1????ʂcY?y0V`?ǘk?2'?d??b?WM?ԅ?KTPH?4l??@?d???i??R(?5?k?, $????ʼV$ǈS??Z?<F>%6???t?,??$??(J???FW>?|K?<4?'??	hY?j?1?C?ϵ@?KCL?5$?3h!awo?@?v֗?????#??#?*???g?????Ф֠??k70e?l#?????+?ot۝?cv??$*?eL߄ѝ?? =?B]W?(rkl???t?n?mf?4ʄ????с???4x??)?Dk?bA|6>?wJ~lƄ??!E?6???C???s=7???~X???nA?5Oڳ??B??)??7???c?c???      V      x?3??)???????? %?      W   n   x???
?@E?;_?_Ȼ?-???`??]60?????y??tn<?J?;s???q?^??':???s?O5??ˀM???AFT?5??$??ff?*f?q???g????{!'      X   ?   x?]?An?0??p?9 T6(?,)$??fUu??8?%#X??J?(?Y???<;:?`???2c 5p???	\H?A@??Z)?rk???e<?	??~?t ]=V??3?#?hE???XlO?2?k?&?Ɉ???|?m????+?q+<???q?Jq2?????q0_?Z'?fɇe???{8????]?9?#???.???e??)?$??!I?o?`G      Y   M   x?3?4?4?4202?50?52W04?25?26?tL.?,??46?2&B?!?%?Vc?d?)Y?ZZ#?????? Z%3      Z   8   x?3?4?tt
12t2?4202?5 "SCs+cS+???crIfY>??1W? ?
      [   H   x?324?4BcN###]C]#sCS++cN???̲|NCS.#?:3"ՙ???SG???D????? ?0?      \   "   x?3?4200?50?50?2r?C?=... Sx?      ]   8   x?3?t?,.)?,?WpN,?,I??4?2?tN,JL?O?r?9}3??R??=... ?6+      ^      x?????? ? ?      _   ?   x?U??
!??>?<???Bt?[DP?.?j ̮?????Etf???3H???sA?3
0?p?JJ)??s?? K??	8?\?o???S???N????WG??TjUa?k儙??T?]0?\??#
0???!.?Zٞur>uG?hC?~?	S|????ܶ??P?F?      `      x?3?tt
12t2?4?????? "?      a      x?????? ? ?      b   x   x?3???LJ-*IL?/?4?2?t/MLN,J?4?2?(??+8'&?????L8?sR??3A???.????
?I?E`f???IE?ř?
9?U???\???E??%?7'%?(?g%c???? ??#?      c      x?????? ? ?      d      x?3?K?K?*M?I?????? /$?      e   ?   x??KN1D?է?Dx>X&CĆH???+?dl???V????fW?n?3X???L0???3}iv???ͩ?Ti?@/?x?M????r??3~?h?1叚?????"?Ϥ??*l???3w???53`cp???t????%=^7v/???g%m??e(???]?\i??(??,؋Q??^??/?Y̌g}8f_???}'"?5G;      f      x?????? ? ?      g   ?   x?m?MN1F??a?8?{	-u?ؤ4?Hәj?????"!??????????vk?`?H???)???RC??9gU?MY???R6?? I????y?LD?A9??kJ????.?????????????L???U&?¾l??mhB#??L???e?????N??????9d@g???_??Jr?0?_???ouv[>???#??(??????R??/?zB???W?      h   =   x?3???ɬJTHIU??OO,??00?2FK?8?6?4'??(c?,????i
????? Tcy      i   "   x?3?tt
12t2???45?4q23?????? F?      j      x?????? ? ?      k      x?????? ? ?      l   *   x?3?4?4202?5 "sC+ B?????+F??? ?nU      m      x?????? ? ?      n   0   x?3?tLN?LI?+I-VH?S?ITH-N.MҺ
?E?)??\1z\\\ )4?      o   2   x?3?.M.-*N?QpN,JLN,?4?4?31?4??4M?60?4?????? ?
c      p   @   x?3??O?W(?L-N??2301?4?237? RFf??F\Ɔ s#CC eab$c???? 
      q   $   x?3?4?420????2?4?4???8ML@?=... j?      r   5   x???  ?7?Pwq?9?????C?T??K%mm?????Y¨??8??1?      s     x?e??j?0????1????-=?B
9???????m帅<}%ق8?1?7?Z	??-???Ǫ??~@2i??A?Thْ1r-?DFH???Ic_#??Bq ??P,D	w??]Y&?G:??6x?RРu??+w?#?×v?????b?ϩ?w?*??x?2H???O????H?E(??2?eX	]x??w?#?uT?`??|?W???R????2p?b?0?c3U??N8}??gg?ã??B?ύ}?_4?????.$g!:?1?5;???K?$????5      t   i   x?st
12t2?-*-?4202?4B??ܤ????̼L.S?H'3? Μ?2????
?2C?2??Բ????.gKC#N?|?@"P??XIH~e~I"W? !x<      u      x?3??00?4600?2?42?4?b???? 5??     