import React from 'react';

const InfoEducation = () => {
  const educacion = [
    {
      curso: "Desarrollo Full Stack",
      centro: "Factoría F5",
      estudios: [
        "Programación Frontend con HTML, CSS y JavaScript",
        "Programación Backend con PHP",
        "Bases de datos con MySQL",
        "Frameworks React y Laravel",
      ],
      fecha: "octubre 2023 - presente",
    }
    // Agrega más objetos de educación según sea necesario
  ];

  const educacionJSON = JSON.stringify(educacion, null, 2);

  return (
    <pre>
      {educacionJSON}
    </pre>
  );
}

export default InfoEducation;
