import React from 'react';
import PropTypes from 'prop-types';


const InfoEducation = ({course, center, studies, date}) => {
  const educacion = [
    {
      curso: {course},
      centro: {center},
      estudios: [
        {studies}
      ],
      fecha: {date},
    }
  ];

  const educacionJSON = JSON.stringify(educacion, null, 2);

  return (
    <pre>
      {educacionJSON}
    </pre>
  );
}

InfoEducation.propTypes = {
    course: PropTypes.string.isRequired,
    center: PropTypes.string.isRequired,
    studies: PropTypes.string.isRequired,
    date: PropTypes.string.isRequired
  };

export default InfoEducation;
